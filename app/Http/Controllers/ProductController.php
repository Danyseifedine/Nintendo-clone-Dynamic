<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $selectedTag = $request->input('tag');

        Product::handleTagSession($request);

        if ($request->ajax() || $request->wantsJson()) {
            $tagToUse = $selectedTag ?: session('selected_tag');
            return $this->getProductsJson($request, $tagToUse);
        }

        // query we7de la njib el counts (demo and deals)
        $counts = DB::table('products')
            ->selectRaw('COUNT(*) as total')
            ->selectRaw('SUM(CASE WHEN discount IS NOT NULL AND discount > 0 THEN 1 ELSE 0 END) as deals_count')
            ->selectRaw('SUM(CASE WHEN has_free_demo = 1 THEN 1 ELSE 0 END) as demo_count')
            ->first();

        $dealsCount = $counts->deals_count;
        $demoCount = $counts->demo_count;


        // hay bi7al ma ken fi request
        return view('pages.product.list', compact('dealsCount', 'demoCount', 'selectedTag'));
    }

    public function getProductsJson(Request $request, $selectedTag = null)
    {
        // \Log::info("getProductsJson received tag: " . ($selectedTag ?: 'none'));

        $filters = $request->only([
            'search',
            'has_free_demo',
            'has_dlc',
            'deals',
            'price_min',
            'price_max',
            'sort',
            'page'
        ]);

        // Add the tag to the filters array if it exists
        if ($selectedTag) {
            $filters['tag'] = $selectedTag;
        }

        $query = Product::query();

        $query->with(['media' => function ($q) {
            $q->where('collection_name', 'product-thumbnail');
        }]);

        // Use the filter scope from the Product model
        $query->filter($filters);

        $query->when(isset($filters['sort']), function ($query) use ($filters) {
            switch ($filters['sort']) {
                case 'price_low':
                    return $query->orderBy('price', 'asc');
                case 'price_high':
                    return $query->orderBy('price', 'desc');
                case 'newest':
                    return $query->orderBy('created_at', 'desc');
                case 'alphabetical':
                    return $query->orderBy('name', 'asc');
                default:
                    return $query->orderBy('created_at', 'desc');
            }
        }, function ($query) {
            return $query->orderBy('created_at', 'desc');
        });

        $products = $query->paginate(12);

        $transformedProducts = $products->through(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'price' => (float)$product->price,
                'discounted_price' => $product->discounted_price,
                'is_on_sale' => $product->is_on_sale,
                'discount' => $product->discount,
                'discount_start_date' => $product->discount_start_date ? $product->discount_start_date->toISOString() : null,
                'discount_end_date' => $product->discount_end_date ? $product->discount_end_date->toISOString() : null,
                'has_free_demo' => $product->has_free_demo,
                'thumbnail' => $product->getFirstMediaUrl('product-thumbnail', 'preview') ?: null,
                'created_at' => $product->created_at ? $product->created_at->toISOString() : null
            ];
        });

        return response()->json([
            'products' => [
                'data' => $transformedProducts,
                'total' => $products->total(),
                'per_page' => $products->perPage(),
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'from' => $products->firstItem(),
                'to' => $products->lastItem(),
            ]
        ]);
    }

    public function show($pname)
    {
        $productName = str_replace('-', ' ', $pname);
        $product = Product::where('name', $productName)
            ->with(['media', 'tags', 'info'])
            ->first();

        if (!$product) {
            abort(404);
        }

        $productImages = $product->getMedia('product-images');
        $primaryMarketingVisual = $product->getMedia('primary-marketing-visual');

        $similarProducts = Product::whereHas('tags', function($query) use ($product) {
                $query->whereIn('name', $product->tags->pluck('name'));
            })
            ->where('id', '!=', $product->id)
            ->with(['media', 'tags'])
            ->inRandomOrder()
            ->take(6)
            ->get();

        return view('pages.product.show', compact(
            'product',
            'productImages',
            'primaryMarketingVisual',
            'similarProducts'
        ));
    }
}

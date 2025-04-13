<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'description_title',
        'price',
        'has_free_demo',
        'discount',
        'discount_start_date',
        'discount_end_date',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'has_free_demo' => 'boolean',
        'discount' => 'integer',
        'discount_start_date' => 'datetime',
        'discount_end_date' => 'datetime',
    ];

    protected $appends = ['discounted_price', 'is_on_sale'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product-images')
            ->useDisk('public');

        $this->addMediaCollection('product-thumbnail')
            ->singleFile()
            ->useDisk('public');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(200)
            ->height(200);

        $this->addMediaConversion('preview')
            ->width(400)
            ->height(400);
    }

    public function info(): HasOne
    {
        return $this->hasOne(ProductInfo::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function productTags()
    {
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function getDiscountedPriceAttribute()
    {
        if ($this->isOnSale()) {
            return (float)($this->price * (1 - $this->discount / 100));
        }

        return (float)$this->price;
    }

    public function isOnSale()
    {
        if ($this->discount <= 0) {
            return false;
        }

        if ($this->discount_end_date && $this->discount_end_date < now()) {
            return false;
        }

        return true;
    }

    public function getIsOnSaleAttribute()
    {
        return $this->isOnSale();
    }

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['search']) && !empty($filters['search'])) {
            $query->where('name', 'like', '%' . $filters['search'] . '%');
        }

        if (isset($filters['has_free_demo']) && $filters['has_free_demo']) {
            $query->where('has_free_demo', true);
        }

        if (isset($filters['deals']) && $filters['deals']) {
            $query->whereNotNull('discount')->where('discount', '>', 0);
        }

        if (isset($filters['price_min'])) {
            $query->where('price', '>=', $filters['price_min']);
        }

        if (isset($filters['price_max'])) {
            $query->where('price', '<=', $filters['price_max']);
        }

        if (isset($filters['tag']) && !empty($filters['tag'])) {
            $query->whereHas('tags', function ($query) use ($filters) {
                if (is_array($filters['tag'])) {
                    $query->whereIn('name', $filters['tag']);
                } else {
                    $query->where('name', $filters['tag']);
                }
            });
        }

        // \Log::info($filters);

        return $query;
    }

    public function replaceSpaceWithDash($string)
    {
        return str_replace(' ', '-', $string);
    }


    public static function handleTagSession($request)
    {
        $selectedTag = $request->input('tag');

        if ($selectedTag) {
            session(['selected_tag' => $selectedTag]);
        } else if ($request->has('tag') || !$request->ajax()) {
            session()->forget('selected_tag');
        }

        return $selectedTag ?: session('selected_tag');
    }
}

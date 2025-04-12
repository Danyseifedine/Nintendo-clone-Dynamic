<x-app-layout>
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 flex flex-col md:flex-row justify-between items-end md:items-center gap-12">
                <!-- If a tag is selected, show it as a heading -->
                @if (isset($selectedTag) && $selectedTag)
                    <div class="flex items-center">
                        <h1 class="text-2xl font-bold text-gray-900">{{ $selectedTag }}</h1>
                        <a href="{{ route('products.index') }}" class="ml-3 text-sm text-nintendo-red hover:text-red-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            Clear
                        </a>
                    </div>
                @endif

                <div class="flex items-center ml-auto">
                    <span class="mr-2 text-gray-700">Sort by:</span>
                    <div class="relative">
                        <select id="sort-select"
                            class="appearance-none bg-white border border-gray-300 rounded-md py-2 pl-4 pr-10 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-red-500">
                            <option value="featured">Featured</option>
                            <option value="price_low">Price: Low to High</option>
                            <option value="price_high">Price: High to Low</option>
                            <option value="newest">Newest</option>
                            <option value="alphabetical">Alphabetical</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="flex bg flex-col md:flex-row gap-8">
                <!-- Filters Sidebar -->
                <div class="w-full md:w-[310px]">
                    <div
                        class="md:sticky md:top-6 bg-gray-100 p-6 rounded-xl shadow-sm max-h-[calc(100vh-4rem)] overflow-y-auto">
                        <div class="flex justify-center mb-6">
                            <button id="clear-filters"
                                class="text-sm text-gray-500 hover:text-nintendo-red flex items-center hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                                Clear all
                            </button>
                        </div>

                        <div class="space-y-6 bg-white rounded-xl p-6">
                            <!-- Search -->
                            <div class="mb-4">
                                <label for="search"
                                    class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                                <input type="text" id="search-input"
                                    class="w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 sm:text-sm"
                                    placeholder="Search games...">
                            </div>

                            <!-- Filter Category -->
                            <div>
                                <label class="flex items-center mb-2">
                                    <input type="checkbox" id="deals-checkbox"
                                        class="rounded text-nintendo-red focus:ring-red-500 h-4 w-4 filter-checkbox">
                                    <span class="ml-2 text-gray-700">Deals</span>
                                    <span class="ml-auto text-xs text-gray-500">{{ $dealsCount ?? 0 }}</span>
                                </label>

                                <label class="flex items-center mb-2">
                                    <input type="checkbox" id="demo-checkbox"
                                        class="rounded text-nintendo-red focus:ring-red-500 h-4 w-4 filter-checkbox">
                                    <span class="ml-2 text-gray-700">Demo available</span>
                                    <span class="ml-auto text-xs text-gray-500">{{ $demoCount ?? 0 }}</span>
                                </label>
                            </div>

                            <!-- Selected Tag (if any) -->
                            @if (isset($selectedTag) && $selectedTag)
                                <div class="mt-6">
                                    <h3 class="text-sm font-medium text-gray-700 mb-3">Selected Tag</h3>
                                    <div class="flex flex-wrap gap-2">
                                        <div
                                            class="bg-nintendo-red text-white rounded-full px-3 py-1 text-sm flex items-center">
                                            {{ $selectedTag }}
                                            <a href="{{ route('products.index') }}"
                                                class="ml-2 text-white hover:text-gray-200">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="flex-1">
                    <!-- Loading Indicator -->
                    <div id="loading-indicator" class="hidden flex justify-center items-center h-64">
                        <svg class="animate-spin h-10 w-10 text-nintendo-red" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4">
                            </circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </div>

                    <!-- No Results Message -->
                    <div id="no-results" class="hidden bg-white p-8 rounded-lg text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-400 mb-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No products found</h3>
                        <p class="text-gray-500">Try adjusting your filters or search criteria.</p>
                    </div>

                    <!-- Products Grid Container -->
                    <div id="products-container"
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <!-- Product cards will be inserted here by JavaScript -->
                    </div>

                    <!-- Pagination -->
                    <div id="pagination" class="mt-8 flex justify-center">
                        <!-- Pagination will be inserted here by JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Card Template -->
    <template id="product-card-template" class="relative">
        <a href="" class="product-link block group relative z-[100]">
            <div
                class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 relative flex flex-col h-full">
                <div class="relative overflow-hidden">
                    <img src="" alt=""
                        class="product-image w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                </div>
                <div class="p-4 flex flex-col flex-grow">
                    <div class="h-14 overflow-hidden">
                        <h3
                            class="product-name font-bold text-gray-900 mb-1 text-sm line-clamp-2 group-hover:text-nintendo-red transition-colors">
                        </h3>
                        <p class="product-release text-xs text-gray-600"></p>
                    </div>

                    <!-- Sale countdown -->
                    <div class="flex flex-col mt-4">
                        <div class="h-6">
                            <div class="product-demo hidden">
                                <span class="bg-blue-600 text-white text-xs px-2 py-[3px] rounded-full">Free
                                    demo</span>
                            </div>
                            <div class="product-free hidden">
                                <span class="bg-purple-600 text-white text-xs px-2 py-[3px] rounded-full">Free
                                    download</span>
                            </div>

                            <div class="product-sale-countdown hidden">
                                <span class="bg-red-600 text-white text-xs px-2 py-[3px] rounded-full">Sale ends: <span
                                        class="countdown-text"></span></span>
                            </div>
                        </div>
                        <div class="flex items-center gap-5">
                            <div class="product-price font-bold text-gray-900 mt-1"></div>
                            <!-- Sale badge -->
                            <div class="product-discount hidden">
                                <div class="relative inline-block">
                                    <div class="bg-red-600 text-white text-xs font-bold px-2 py-1 clip-tag">
                                        -<span class="discount-percent"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-xs rounded flex items-center">
                                <svg class="w-3 h-3 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                    </path>
                                </svg>
                                Games
                            </span>
                        </div>
                        <div class="pointer-events-auto z-10">
                            <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor" width="40"
                                role="presentation" alt="" data-testid="heartspark" color="#E60012"
                                size="24" class="relative">
                                <g class="hearts">
                                    <path class="heart heart-outline"
                                        d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                    </path>
                                </g>
                                <g class="sparks hidden">
                                    <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                    <path class="spark" d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                        stroke-width="1.99998"></path>
                                    <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                    <path class="spark" d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                        stroke-width="1.99998"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </template>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="{{ asset('assets/js/product/list/index.js') }}" type="module"></script>
    @endpush
</x-app-layout>

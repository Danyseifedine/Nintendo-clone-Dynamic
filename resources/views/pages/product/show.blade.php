<x-app-layout>

    @push('styles')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    @endpush
    <!-- Main Content -->
    <main
        style="background: rgb(255,255,255);
        background: linear-gradient(0deg, rgba(255,255,255,1) 13%, rgba(214,240,250,1) 10%);"
        class="from-[#D6F0FA] to-white">
        <div class="md:container mx-auto md:px-4 md:py-8">
            <div class="bg-white md:px-12 pb-16 md:py-6 py-3 mb-8 md:rounded-xl md:max-w-[1230px] mx-auto"
                style="box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1), 0 2px 10px rgba(0, 0, 0, 0.05);">
                <!-- Breadcrumb -->
                <div class="md:mb-6 mb-3 text-sm md:px-0 px-4">
                    <a href="#" class="text-gray-400 font-[600] hover:text-red-600">Store</a>
                    <span class="mx-2 text-gray-400">›</span>
                    <a href="#" class="text-gray-400 font-[600] hover:text-red-600">Games</a>
                    <span class="mx-2 text-gray-400">›</span>
                    <span class="text-gray-800 font-[600]">{{ $product->name }}</span>
                </div>

                <!-- Game Details -->
                <div class="grid grid-cols-1 md:grid-cols-5 gap-10">
                    <!-- Game Screenshots -->
                    <div class="md:col-span-3">
                        <!-- Main Image with Pagination -->
                        <div class="mb-4 main-image-container relative md:rounded-lg">
                            <img id="mainImage" src="{{ $productImages->first()->getUrl() }}" alt="{{ $product->name }}"
                                class="w-full">

                            <!-- Main image pagination arrows -->
                            <button class="main-pagination-prev absolute left-4 top-1/2 transform -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button class="main-pagination-next absolute right-4 top-1/2 transform -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="white">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        <!-- Thumbnails with Smooth Scrolling -->
                        <div class="thumbnail-container relative md:px-0 px-1">
                            <div class="thumbnail-grid">
                                @foreach ($productImages as $image)
                                    <div class="rounded-md overflow-hidden h-16"
                                        data-image-path="{{ $image->getUrl() }}">
                                        <img src="{{ $image->getUrl() }}" alt="Thumbnail {{ $loop->iteration }}"
                                            class="w-full h-full rounded-2xl object-cover">
                                    </div>
                                @endforeach
                            </div>

                            <!-- Pagination arrows -->
                            <button class="pagination-prev absolute left-0 top-1/2 transform -translate-y-1/2 hidden">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button class="pagination-next absolute right-0 top-1/2 transform -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>

                        <!-- ESRB Rating -->
                        <div class="mt-6 hidden md:block">
                            <div class="flex items-start">
                                <img src="https://www.esrb.org/wp-content/uploads/2019/05/E10plus.svg" alt="ESRB Rating"
                                    class="h-14 mr-5">
                                <div>
                                    <p
                                        class="text-xs text-gray-700 lg:w-[300px] w-full border-b-[1px] pb-2 border-gray-700">
                                        Fantasy Violence, Mild Blood, Mild Language,
                                        Simulated
                                        Gambling, Use of Alcohol, Use of Tobacco</p>
                                    <p class="text-xs text-gray-700 mt-2">Users Interact</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Game Info -->
                    <div class="md:col-span-2">
                        <div class="flex justify-between md:px-0 px-4 items-start mb-6">
                            <h1 class="text-3xl font-[600] text-gray-600">{{ $product->name }}</h1>
                        </div>

                        <div class="mb-8 flex items-center md:px-0 px-4 justify-between gap-2 mt-12">
                            <span class="text-3xl font-[600] text-gray-600">${{ $product->price }}</span>
                            <button class="text-red-600">
                                <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor" width="50"
                                    role="presentation" alt="" data-testid="heartspark" color="currentColor"
                                    size="24">
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
                            </button>
                        </div>

                        <div class="mt-auto">
                            <div class="md:px-0 px-4">
                                <button
                                    class="btn-hover-custom w-full bg-red-600 md:px-0 px-4 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-md flex gap-3 items-center justify-center mb-4 px-5 py-5 text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24"
                                        role="presentation" alt="" data-testid="DownloadIcon"
                                        color="currentColor" size="24">
                                        <path
                                            d="M4.3 19.4v5.3c0 .5.5.9 1 .9h21.4c.5 0 1-.5 1-.9v-5.3H32v6.3c-.2 2.2-2.1 4-4.4 4H4.2c-2.3 0-4.2-1.8-4.2-4v-6.3h4.3zM17.9 2.2v12.2l5-4.8 2.8 2.8-9.8 9.9L6 12.5l2.6-2.8 5.2 4.8V2.2h4.1z"
                                            fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                    </svg>
                                    <span class="text-xl">
                                        Direct Download
                                    </span>
                                </button>
                                <p class="text-xs md:px-0 px-4 text-gray-600">This item will be sent to your system
                                    automatically
                                    after
                                    purchase.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Game Description Section -->
    <section class="bg-white py-8 md:py-2">
        <div class="md:container px-4 mx-auto md:px-12">
            <div class="max-w-full md:max-w-[1170px] mx-auto">
                <!-- Game Description Header -->

                <!-- Game Description Content -->
                <div class="flex justify-between items-start flex-col md:flex-row gap-8">
                    <!-- Left Column - Game Description -->
                    <div class="w-full md:max-w-[580px]">
                        <h2 class="text-xl md:text-xl font-bold text-gray-600 mb-4">{{ $product->description_title }}
                        </h2>
                        <div id="hidden-description" class="hidden">
                            {!! $product->description !!}
                        </div>
                        <div id="full-description">
                        </div>
                        @if (strlen(strip_tags($product->description)) > 600)
                            <div id="read-more-btn"
                                class="flex items-center mt-5 gap-1 text-nintendo-red font-bold mb-4 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18"
                                    role="presentation" alt="" data-testid="PlusIcon" color="currentColor"
                                    size="24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M32.04 12h-12V0h-8v12h-12v8h12v12h8V20h12v-8z"></path>
                                </svg>
                                <span>Read more</span>
                            </div>
                        @endif

                        <p class="text-xs text-gray-500 mt-6 mb-3">Software description provided by the publisher.</p>

                        <a href="#"
                            class="btn-hover-custom inline-block bg-nintendo-red text-white font-bold py-3 px-6 rounded-md hover:bg-red-700 transition duration-200">
                            Explore this game's official website
                        </a>
                    </div>

                    <!-- Right Column - Game Logo/Image -->
                    <div class="w-full flex justify-center md:w-3/5">
                        @if ($primaryMarketingVisual->count() > 0)
                            <img src="{{ $primaryMarketingVisual->first()->getUrl() }}" alt="{{ $product->name }}"
                                class="max-w-full h-[400px] object-cover">
                        @else
                            <img src="{{ asset('assets/images/placeholder.jpg') }}" alt="{{ $product->name }}"
                                class="w-full h-[400px] object-cover">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Tags Section -->
    <section class="bg-white py-8 md:pt-24 md:pb-12 ">
        <div class="md:container mx-auto md:px-4 px-4">
            <div class="md:max-w-[1170px] mx-auto">
                <!-- Section Header -->
                <h2 class="text-2xl md:text-3xl font-bold text-dark-gray mb-6">Related tags</h2>

                <!-- Tags Container -->
                <div class="flex flex-wrap gap-3">
                    @foreach ($product->tags as $tag)
                        <a href="{{ route('products.index', ['tag' => $tag->name]) }}"
                            class="bg-gray-100 hover:bg-gray-200 transition-colors duration-200 rounded-full px-4 py-2 text-dark-gray font-[600]">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- section 3 -->
    <!-- About this item Section -->
    <section class="bg-white border-gray-200">
        <div class="md:container mx-auto md:px-4 px-4">
            <div class="md:max-w-[1130px] mx-auto">
                <!-- Section Header -->
                <h2 class="text-2xl md:text-3xl font-bold text-dark-gray border-b border-gray-200 pb-2 mb-6"><span
                        class="pb-12">About this item</span></h2>

                <!-- Game Details Table -->
                <div class="divide-y divide-gray-200">
                    <!-- Game file size -->
                    <div class="pb-6 md:flex flex-col md:flex-row">
                        <div class="w-1/3 gap-4 w-full md:w-2/4 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve"
                                width="28" role="presentation" alt="" data-testid="StorageIcon"
                                size="28" color="#484848">
                                <ellipse cx="16" cy="4.234" rx="13" ry="4.234"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></ellipse>
                                <path fill="currentColor"
                                    d="M3 15.71v5.293c0 .408.239.781.616.935C7.085 23.35 11.362 24.192 16 24.192s8.915-.84 12.384-2.254c.377-.154.616-.527.616-.935V15.71c-3.573 1.57-8.084 2.515-13 2.515S6.573 17.28 3 15.71z">
                                </path>
                                <path fill="currentColor"
                                    d="M3 7.852v5.292c0 .408.239.782.616.935 3.469 1.414 7.746 2.254 12.384 2.254s8.915-.84 12.384-2.254c.377-.153.616-.527.616-.935V7.852c-3.573 1.57-8.084 2.514-13 2.514S6.573 9.422 3 7.852zm26 15.767c-3.573 1.57-8.084 2.514-13 2.514S6.573 25.19 3 23.62v4.147C3 30.104 8.82 32 16 32s13-1.896 13-4.234">
                                </path>
                            </svg>
                            <span class="font-medium text-lg text-dark-gray">Game file size</span>
                        </div>
                        <div class="w-2/3 md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->file_size }}
                        </div>
                    </div>

                    <!-- Supported play modes -->
                    <div class="py-4 pb-6 pt-6 flex-col md:flex-row flex">
                        <div class="w-1/3 md:w-2/4 w-full gap-3 flex items-center">
                            <svg data-name="Switch lite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                width="28" role="presentation" alt="" data-testid="SwitchLiteIcon"
                                size="28" color="#484848">
                                <path
                                    d="M28.737 9.41H3.262a3.218 3.218 0 0 0-3.218 3.218v7.164a3.218 3.218 0 0 0 3.218 3.218h25.475a3.218 3.218 0 0 0 3.219-3.218v-7.164a3.218 3.218 0 0 0-3.219-3.218zm.112 2.173a.563.563 0 1 1-.563.563.563.563 0 0 1 .563-.563zm0 2.32a.563.563 0 1 1-.563.564.563.563 0 0 1 .563-.563zM3.146 12.106a1.2 1.2 0 1 1-1.2 1.201 1.2 1.2 0 0 1 1.2-1.2zm1.437 5.85a.125.125 0 0 1-.125.125h-.731a.133.133 0 0 0-.133.134v.73a.126.126 0 0 1-.125.126h-.636a.125.125 0 0 1-.126-.126v-.73a.133.133 0 0 0-.132-.134h-.732a.125.125 0 0 1-.125-.125v-.636a.125.125 0 0 1 .125-.125h.732a.133.133 0 0 0 .132-.133v-.73a.125.125 0 0 1 .126-.126h.636a.126.126 0 0 1 .125.125v.731a.133.133 0 0 0 .133.133h.73a.125.125 0 0 1 .126.125zm1.674 3.654h19.497V10.82H6.257zm20.807-8.302a.563.563 0 1 1 .563.563.563.563 0 0 1-.563-.563zm1.778 5.532a1.2 1.2 0 1 1 1.2-1.2 1.2 1.2 0 0 1-1.2 1.2zm1.23-4.97a.563.563 0 1 1 .562-.562.563.563 0 0 1-.563.563z"
                                    fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">Supported play modes</span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->supported_play_modes }}
                        </div>
                    </div>

                    <!-- No. of players -->
                    <div class="py-4 mb-6 flex-col md:flex-row pt-6 flex">
                        <div class="w-1/3 w-full md:w-2/4 flex gap-3 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve"
                                width="28" role="presentation" alt="" data-testid="GroupIcon"
                                size="28" color="#484848">
                                <path fill="currentColor"
                                    d="M9 13c0 3.8 3.1 6.9 6.9 6.9 3.8 0 6.9-3.1 6.9-6.9 0-3.8-3.1-6.9-6.9-6.9C12.1 6.1 9 9.2 9 13z">
                                </path>
                                <path fill="currentColor"
                                    d="M24.3 13c0 .7-.1 1.4-.3 2h.3c3.2 0 5.8-2.6 5.8-5.9 0-3.3-2.6-5.9-5.8-5.9-1.8 0-3.5.9-4.5 2.3 2.7 1.4 4.5 4.2 4.5 7.5zM7.4 15h.3c-.2-.6-.3-1.3-.3-2 0-3.3 1.8-6.1 4.5-7.5-1.1-1.4-2.7-2.3-4.5-2.3-3.2 0-5.8 2.6-5.8 5.9 0 3.3 2.6 5.9 5.8 5.9zm5.1 5.7c-1.8-.8-3.2-2.2-4.1-3.9-.3 0-.6-.1-1-.1C3.3 16.8 0 19.6 0 23h8.2c1.2-1 2.6-1.8 4.3-2.3zm11.8-3.9c-.3 0-.7 0-1 .1-.9 1.7-2.3 3.1-4.1 3.9 1.6.5 3.1 1.3 4.2 2.3h8.2c.2-3.5-3.2-6.3-7.3-6.3zm-8.4 5.1c-4.8 0-8.7 3-9 6.7h18c-.4-3.8-4.3-6.7-9-6.7z">
                                </path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">No. of players</span>
                        </div>
                        <div class="w-2/3 w-full md:px-0 px-11 md:w-3/4 text-gray-700">
                            {{ $product->info->number_of_players }}
                        </div>
                    </div>

                    <!-- Genre -->
                    <div class="py-4 mb-6 flex-col md:flex-row pt-6 flex">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28"
                                role="presentation" alt="" data-testid="DPadIcon" size="28"
                                color="#484848">
                                <path
                                    d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9.1.5-.3.9-.9.9z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">Genre</span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->genre }}
                        </div>
                    </div>

                    <!-- Nintendo Switch Online -->
                    <div class="py-4 flex flex-col md:flex-row mb-6 pt-6">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28"
                                role="presentation" alt="" data-testid="NsoIcon" size="28"
                                color="#484848">
                                <path fill="currentColor"
                                    d="M0 0v32h32V0zm8.785 9.232a3.7 3.7 0 0 1 3.7-3.7h3.154a.106.106 0 0 1 .106.106v14.218a.106.106 0 0 1-.106.106h-3.154a3.7 3.7 0 0 1-3.7-3.7zM6.767 26.596a2.034 2.034 0 1 1 2.064-2.034 2.05 2.05 0 0 1-2.064 2.034zm6.473-.124h-.677l-2.032-2.547v2.547h-.773v-3.82h.77l1.9 2.464v-2.464h.812zm4.025 0H14.35v-3.82h.82v3.075h2.094zm1.616 0h-.82v-3.82h.82zm-1.586-6.51a.105.105 0 0 1-.106-.106V5.626a.093.093 0 0 1 .094-.094h2.232a3.7 3.7 0 0 1 3.7 3.7v7.03a3.7 3.7 0 0 1-3.7 3.7zm6.178 6.51h-.676l-2.033-2.547v2.547h-.772v-3.82h.769l1.901 2.464v-2.464h.811zm4.27-3.075H25.41v.76h2.22v.707h-2.22v.863h2.333v.745H24.59v-3.82h3.154z">
                                </path>
                                <path fill="currentColor"
                                    d="M6.767 23.306a1.257 1.257 0 1 0 1.214 1.256 1.236 1.236 0 0 0-1.214-1.256zm5.718-4.508h2.097V6.696h-2.097A2.536 2.536 0 0 0 9.95 9.232v7.03a2.536 2.536 0 0 0 2.536 2.536zm-.097-10.294a1.357 1.357 0 1 1-1.356 1.356 1.357 1.357 0 0 1 1.356-1.356zm7.655 3.506a1.459 1.459 0 1 0 1.46 1.458 1.459 1.459 0 0 0-1.46-1.458z">
                                </path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">Nintendo Switch Online
                            </span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->online_features }}
                        </div>
                    </div>

                    <!-- System -->
                    <div class="py-4 flex flex-col md:flex-row mb-6 pt-6">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28"
                                role="presentation" alt="" data-testid="SwitchIcon" size="28"
                                color="#484848">
                                <path
                                    d="M13.54 0a.18.18 0 0 1 .17.17v31.66a.15.15 0 0 1-.17.17H8.11a6.86 6.86 0 0 1-6.85-6.8V6.74A6.81 6.81 0 0 1 8.11 0h5.43zm10.4 0a6.77 6.77 0 0 1 6.8 6.74V25.2a6.82 6.82 0 0 1-6.85 6.8h-5.43a.15.15 0 0 1-.17-.17V.17c0-.11.11-.17.22-.17h5.43zM7.49 19.6a1.26 1.26 0 1 0 0 2.51 1.32 1.32 0 0 0 1.31-1.25 1.28 1.28 0 0 0-1.31-1.26zm17-3.6a2.86 2.86 0 0 0-2.85 2.86A2.86 2.86 0 1 0 24.51 16zm-14.28.86a1.26 1.26 0 1 0 0 2.51 1.35 1.35 0 0 0 1.31-1.26 1.32 1.32 0 0 0-1.29-1.25zm-5.49 0a1.26 1.26 0 1 0 0 2.51 1.36 1.36 0 0 0 1.32-1.26 1.28 1.28 0 0 0-1.3-1.25zm2.75-2.69a1.26 1.26 0 1 0 0 2.52 1.37 1.37 0 0 0 1.33-1.26 1.28 1.28 0 0 0-1.31-1.26zm17-4a1.36 1.36 0 0 0-1.31 1.26 1.32 1.32 0 1 0 1.31-1.26zm-17-5.08a2.86 2.86 0 1 0 0 5.71 2.86 2.86 0 0 0 2.85-2.86 2.82 2.82 0 0 0-2.83-2.85zm19.77 2.4a1.26 1.26 0 1 0 1.31 1.25 1.32 1.32 0 0 0-1.29-1.25zm-5.43 0a1.26 1.26 0 1 0 1.31 1.25 1.29 1.29 0 0 0-1.29-1.25zm2.68-2.75A1.36 1.36 0 0 0 23.2 6a1.32 1.32 0 1 0 1.31-1.26z"
                                    fill="currentColor" fill-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium text-gray-700">System</span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->system }}
                        </div>
                    </div>

                    <!-- Publisher -->
                    <div class="py-4 flex flex-col md:flex-row mb-6 pt-6">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28"
                                role="presentation" alt="" data-testid="BuildingIcon" size="28"
                                color="#484848">
                                <path
                                    d="M28.9 2.1C28.9 1 28 0 26.8 0H5.6C4.4 0 3.5 1 3.5 2.1v29.8H12v-6.4h7.4v6.4h9.5V2.1zm-19 25.6H6.7v-3.2h3.2v3.2zm0-5.4H6.7v-3.2h3.2v3.2zm0-5.3H6.7v-3.2h3.2V17zm0-5.3H6.7V8.5h3.2v3.2zm0-5.3H6.7V3.2h3.2v3.2zm5.2 15.9H12v-3.2h3.2v3.2zm0-5.3H12v-3.2h3.2V17zm0-5.3H12V8.5h3.2v3.2zm0-5.3H12V3.2h3.2v3.2zm5.3 15.9h-3.2v-3.2h3.2v3.2zm0-5.3h-3.2v-3.2h3.2V17zm0-5.3h-3.2V8.5h3.2v3.2zm0-5.3h-3.2V3.2h3.2v3.2zm5.3 21.3h-3.2v-3.2h3.2v3.2zm0-5.4h-3.2v-3.2h3.2v3.2zm0-5.3h-3.2v-3.2h3.2V17zm0-5.3h-3.2V8.5h3.2v3.2zm0-5.3h-3.2V3.2h3.2v3.2z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                            </svg>
                            <span class="font-medium text-gray-700">Publisher</span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->publisher }}
                        </div>
                    </div>

                    <!-- Developer -->
                    <div class="py-4 flex flex-col md:flex-row mb-6 pt-6">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="28"
                                role="presentation" alt="" data-testid="WrenchIcon" size="28"
                                color="#484848">
                                <path fill="currentColor"
                                    d="M23.0616 18.5338L15.0011 10.4733C15.3211 9.62528 15.4939 8.70691 15.4939 7.75014C15.4971 3.46868 12.0284 0 7.74694 0C6.78697 0 5.8686 0.175994 5.02383 0.492784L10.0125 5.48142L5.48142 10.0125L0.492784 5.02383C0.172794 5.8718 0 6.79017 0 7.74694C0 12.0252 3.46868 15.4939 7.74694 15.4939C8.70691 15.4939 9.62528 15.3179 10.4701 15.0011L18.5306 23.0616C19.7817 24.3128 21.8105 24.3128 23.0616 23.0616C24.3128 21.8105 24.3128 19.7817 23.0616 18.5306V18.5338ZM20.4921 21.9193C19.6729 21.9193 19.0106 21.2569 19.0106 20.4377C19.0106 19.6185 19.6729 18.9562 20.4921 18.9562C21.3113 18.9562 21.9737 19.6185 21.9737 20.4377C21.9737 21.2569 21.3113 21.9193 20.4921 21.9193Z">
                                </path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">Developer</span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            {{ $product->info->developer }}
                        </div>
                    </div>

                    <!-- Supported languages -->
                    <div class="py-4 flex-col md:flex-row flex mb-6 pt-6">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28"
                                role="presentation" alt="" data-testid="GlobeIcon" size="28"
                                color="#484848">
                                <path
                                    d="M16 0C11.7 0 7.7 1.7 4.7 4.7S0 11.7 0 16c0 4.3 1.7 8.3 4.7 11.3S11.7 32 16 32c8.8 0 16-7.2 16-16S24.8 0 16 0zm-5.2 4c-.5.9-1 1.9-1.4 3-.6-.2-1.3-.5-2-.8 1-1 2.2-1.7 3.4-2.2zM5.5 8.1c1 .5 2.1 1 3.2 1.4-.4 1.6-.6 3.4-.7 5.2H3c.2-2.4 1.1-4.6 2.5-6.6zM3 17.3h5.1c.1 1.8.3 3.5.7 5.2-1.1.4-2.2.8-3.2 1.4-1.5-2-2.4-4.2-2.6-6.6zm4.4 8.5c.7-.3 1.4-.6 2.1-.8.4 1.1.9 2.1 1.4 3-1.3-.5-2.5-1.2-3.5-2.2zm7.3 2.8c-1-.8-2-2.3-2.7-4.3.9-.2 1.8-.3 2.7-.4v4.7zm0-7.3c-1.1.1-2.3.2-3.4.5-.3-1.4-.5-2.9-.6-4.5h4v4zm0-6.6h-4c.1-1.6.3-3.1.6-4.5 1.1.2 2.3.4 3.4.5v4zm0-6.7c-1 0-1.8-.1-2.7-.3.7-2 1.7-3.5 2.7-4.2V8zM29 14.7h-5.1c-.1-1.8-.3-3.5-.7-5.2 1.1-.4 2.2-.8 3.2-1.4 1.5 2 2.4 4.2 2.6 6.6zm-4.4-8.5c-.7.3-1.4.6-2.1.8-.4-1.1-.9-2.2-1.4-3.1 1.3.6 2.5 1.3 3.5 2.3zm-7.3-2.7c1 .8 1.9 2.3 2.6 4.2-.8.2-1.7.3-2.6.3V3.5zm0 7.2c1.1-.1 2.3-.2 3.4-.4.3 1.4.5 2.9.6 4.5h-3.9v-4.1zm0 17.8V24c.9.1 1.8.2 2.6.4-.6 1.8-1.6 3.4-2.6 4.1zm0-7.2v-4h3.9c-.1 1.6-.3 3.1-.6 4.5-1-.2-2.1-.4-3.3-.5zm3.8 6.8c.5-.9 1-1.9 1.4-3.1.7.2 1.4.5 2.1.9-1 .9-2.2 1.6-3.5 2.2zm5.4-4.2c-1-.5-2.1-1-3.2-1.4.4-1.6.6-3.4.7-5.1h5c-.2 2.3-1.1 4.5-2.5 6.5z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">Supported languages</span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700 ">
                            {{ $product->info->supported_languages }}
                        </div>
                    </div>

                    <!-- released date -->
                    <div class="py-4 flex-col md:flex-row flex mb-6 pt-6">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve"
                                width="28" role="presentation" alt="" data-testid="CalendarIcon"
                                size="28" color="#484848">
                                <path fill="currentColor"
                                    d="M21.8 19.1h5.6c.5 0 .9-.4.9-.9v-5.6c0-.5-.4-.9-.9-.9h-5.6c-.5 0-.9.4-.9.9v5.6c0 .5.4.9.9.9zm0 8.6h5.6c.5 0 .9-.4.9-.9v-5.6c0-.5-.4-.9-.9-.9h-5.6c-.5 0-.9.4-.9.9v5.6c0 .5.4.9.9.9zm1.6-20.3h1.5c.5 0 .9-.4.9-.9v-5c0-.5-.4-.9-.9-.9h-1.5c-.5 0-.9.4-.9.9v5c0 .5.4.9.9.9zm-16.3 0h1.5c.5 0 .9-.4.9-.9v-5c0-.5-.4-.9-.9-.9H7.1c-.5 0-.9.4-.9.9v5c0 .5.4.9.9.9zm6.1 20.3h5.6c.5 0 .9-.4.9-.9v-5.6c0-.5-.4-.9-.9-.9h-5.6c-.5 0-.9.4-.9.9v5.6c0 .5.4.9.9.9z">
                                </path>
                                <path fill="currentColor"
                                    d="M29.5 4.3H27v2.2c0 1.2-.9 2.1-2.1 2.1h-1.5c-1.2 0-2.1-1-2.1-2.1V4.3H10.7v2.2c0 1.2-.9 2.1-2.1 2.1H7.1C5.9 8.6 5 7.6 5 6.5V4.3H2.5C1.1 4.3 0 5.4 0 6.7V29c0 1.4 1.1 2.5 2.5 2.5h27c1.4 0 2.5-1.1 2.5-2.5V6.7c0-1.3-1.1-2.4-2.5-2.4zm0 24.7h-27V10.4h27V29z">
                                </path>
                                <path fill="currentColor"
                                    d="M13.2 19.1h5.6c.5 0 .9-.4.9-.9v-5.6c0-.5-.4-.9-.9-.9h-5.6c-.5 0-.9.4-.9.9v5.6c0 .5.4.9.9.9zm-8.6 8.6h5.6c.5 0 .9-.4.9-.9v-5.6c0-.5-.4-.9-.9-.9H4.6c-.5 0-.9.4-.9.9v5.6c0 .5.4.9.9.9zm0-8.6h5.6c.5 0 .9-.4.9-.9v-5.6c0-.5-.4-.9-.9-.9H4.6c-.5 0-.9.4-.9.9v5.6c0 .5.4.9.9.9z">
                                </path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">Release date </span>
                        </div>
                        <div class="w-2/3 w-full md:w-3/4 md:px-0 px-11 text-gray-700">
                            October 5, 2017
                        </div>
                    </div>

                    <!-- released date -->
                    <div class="py-4 flex-col md:flex-row flex mb-6 pt-6" style="border-bottom: 1px solid #48484820;">
                        <div class="w-1/3 w-full md:w-2/4 gap-3 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="28"
                                role="presentation" alt="" data-testid="GearIcon" size="28"
                                color="#484848">
                                <path
                                    d="M30.6 13.1h-2.4c-.3-1.4-.8-2.6-1.5-3.8l1.7-1.7c.5-.5.5-1.4 0-1.9l-2.1-2.1c-.5-.5-1.4-.5-1.9 0l-1.7 1.7c-1.2-.7-2.4-1.3-3.8-1.5V1.4c0-.7-.6-1.4-1.4-1.4h-3c-.7 0-1.4.6-1.4 1.4v2.4c-1.4.4-2.6.8-3.8 1.5L7.6 3.6c-.5-.5-1.4-.5-1.9 0L3.6 5.7c-.6.5-.6 1.4 0 1.9l1.7 1.7c-.7 1.2-1.3 2.4-1.5 3.8H1.3c-.7 0-1.4.6-1.4 1.4v3c0 .7.6 1.4 1.4 1.4h2.4c.3 1.4.8 2.6 1.5 3.8l-1.7 1.7c-.5.5-.5 1.4 0 1.9l2.1 2.1c.6.5 1.4.5 2 0l1.7-1.7c1.2.7 2.4 1.3 3.8 1.5v2.5c0 .7.6 1.4 1.4 1.4h3c.7 0 1.4-.6 1.4-1.4v-2.4c1.4-.3 2.6-.8 3.8-1.5l1.7 1.7c.5.5 1.4.5 1.9 0l2.1-2.1c.5-.5.5-1.4 0-1.9l-1.7-1.7c.7-1.2 1.3-2.4 1.5-3.8h2.4c.7 0 1.4-.6 1.4-1.4v-3c.1-.9-.6-1.5-1.4-1.5zM16 21.6c-3.1 0-5.6-2.5-5.6-5.6 0-3.1 2.5-5.6 5.6-5.6 3.1 0 5.6 2.5 5.6 5.6-.1 3.1-2.6 5.6-5.6 5.6z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                            </svg>
                            <span class="font-medium text-gray-700 text-lg">ESRB rating </span>
                        </div>
                        <div class="w-2/3 w-full pt-5 md:w-3/4 md:px-0 px-11 text-gray-700">
                            <div class="flex items-start">
                                <img src="https://www.esrb.org/wp-content/uploads/2019/05/E10plus.svg"
                                    alt="ESRB Rating" class="h-14 mr-5">
                                <div>
                                    <p
                                        class="text-xs text-gray-700 lg:w-[300px] w-full border-b-[1px] pb-2 border-gray-700">
                                        {{ $product->info->esrb_rating }}</p>
                                    <p class="text-xs text-gray-700 mt-2">Users Interact</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- More like this Section (slider) -->
    <section class="bg-white py-6 md:py-24">
        <div class="md:container mx-auto md:px-4 px-4">
            <div class="md:max-w-[1170px] mx-auto">
                <!-- Section Header -->
                <h2 class="text-2xl md:text-3xl font-bold text-gray-600 mb-8">More like this</h2>
                <!-- Game Suggestions Slider -->
                <div class="relative">
                    <!-- Swiper Container -->
                    <div class="swiper suggestionSwiper">
                        <div class="swiper-wrapper">
                            <!-- Game Card 1 -->
                            @foreach ($similarProducts as $similarProduct)
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200 relative flex flex-col h-full">
                                        <div class="relative overflow-hidden">
                                            <img src="{{ $similarProduct->getMedia('product-thumbnail')->first()->getUrl() }}"
                                                alt="{{ $similarProduct->name }}"
                                                class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110">
                                        </div>
                                        <div class="p-4 flex flex-col flex-grow">
                                            <div class="h-14 overflow-hidden">
                                                <h3
                                                    class="font-bold text-gray-900 mb-1 text-sm line-clamp-2 group-hover:text-nintendo-red transition-colors">
                                                    {{ $similarProduct->name }}
                                                </h3>
                                                <p class="text-xs text-gray-600">
                                                    {{ $similarProduct->created_at->format('Y') }}</p>
                                            </div>

                                            <div class="flex flex-col mt-4">
                                                <div class="h-6">
                                                    @if ($similarProduct->has_free_demo)
                                                        <span
                                                            class="bg-blue-600 text-white text-xs px-2 py-[3px] rounded-full">Free
                                                            demo</span>
                                                    @endif
                                                    @if ($similarProduct->price == 0)
                                                        <span
                                                            class="bg-purple-600 text-white text-xs px-2 py-[3px] rounded-full">Free
                                                            download</span>
                                                    @endif
                                                    @if (isset($similarProduct->sale_ends_at) && $similarProduct->sale_ends_at)
                                                        <span
                                                            class="bg-red-600 text-white text-xs px-2 py-[3px] rounded-full">Sale
                                                            ends:
                                                            {{ $similarProduct->sale_ends_at->format('M d') }}</span>
                                                    @endif
                                                </div>
                                                <div class="flex items-center gap-5">
                                                    <div class="font-bold text-gray-900 mt-1">
                                                        @if ($similarProduct->price == 0)
                                                            Free
                                                        @else
                                                            ${{ $similarProduct->price }}
                                                        @endif
                                                    </div>
                                                    @if (isset($similarProduct->discount_percent) && $similarProduct->discount_percent > 0)
                                                        <div class="relative inline-block">
                                                            <div
                                                                class="bg-red-600 text-white text-xs font-bold px-2 py-1 clip-tag">
                                                                -{{ $similarProduct->discount_percent }}%
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="flex items-center mt-3 justify-between">
                                                <div>
                                                    <span class="text-xs rounded flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                            width="16" role="presentation" alt=""
                                                            data-testid="DPadIcon" color="#484848" size="24">
                                                            <path
                                                                d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9.1.5-.3.9-.9.9z"
                                                                fill-rule="evenodd" clip-rule="evenodd"
                                                                fill="currentColor">
                                                            </path>
                                                        </svg>
                                                        <span class="text-xs ml-1">Games</span>
                                                    </span>
                                                </div>
                                                <div>
                                                    <svg viewBox="0 0 54 54" fill="currentColor"
                                                        stroke="currentColor" width="40" role="presentation"
                                                        alt="" data-testid="heartspark" color="#E60012"
                                                        size="24">
                                                        <g class="hearts">
                                                            <path class="heart heart-outline"
                                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                                            </path>
                                                        </g>
                                                        <g class="sparks hidden">
                                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2">
                                                            </path>
                                                            <path class="spark"
                                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                                stroke-width="1.99998"></path>
                                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2">
                                                            </path>
                                                            <path class="spark"
                                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                                stroke-width="1.99998"></path>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Navigation Buttons -->
                    <div class="absolute top-1/2 -left-4 sm:hidden transform -translate-y-1/2 z-10">
                        <button class="suggestion-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                    </div>
                    <div class="absolute top-1/2 -right-4 hidden md:block transform -translate-y-1/2 z-10">
                        <button class="suggestion-next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="text-xs text-gray-500 pt-12 mt-12">
                    WARNING: If you have epilepsy or have had seizures or other unusual reactions to flashing lights or
                    patterns, consult a doctor before playing video games. All users should read the Health and Safety
                    Information available in the system settings before using this software.<br><br>

                    Nintendo Switch Online membership (sold separately) and Nintendo Account required for online play.
                    Not available in all countries. Internet access required for online features. Terms apply.
                    nintendo.com/switch-online<br><br>

                    Stardew Valley © ConcernedApe LLC 2016-2020. All rights reserved.
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="{{ asset('assets/js/product/single/index.js') }}" type="module"></script>
    @endpush
</x-app-layout>

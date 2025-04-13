@props(['hasBanner' => false])

<!-- Header/Navigation -->
<header class="bg-white hidden lg:block text-white">
    <div class="flex items-center border-b border-gray-200 justify-between">
        <!-- Nintendo Logo -->
        <div class="flex">
            <div class="bg-nintendo-red flex items-center px-[10px]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Nintendo.svg" alt="Nintendo" class="h-7">
            </div>

            <!-- Navigation Links -->
            <nav class="hidden md:flex space-x-7 py-[14px] px-8 relative">
                <a href="#"
                    class="explore-link flex justify-center gap-[6px] text-gray-800 font-semibold text-[0.875rem] items-center">
                    <svg width="17" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        role="presentation" alt="" size="24" color="#E60012">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.8794 12C21.8794 17.0881 17.7547 21.2129 12.6665 21.2129C7.57836 21.2129 3.4536 17.0881 3.4536 12C3.4536 6.91185 7.57836 2.7871 12.6665 2.7871C17.7547 2.7871 21.8794 6.91185 21.8794 12ZM24.6665 12C24.6665 18.6274 19.2939 24 12.6665 24C6.03909 24 0.666504 18.6274 0.666504 12C0.666504 5.37258 6.03909 0 12.6665 0C19.2939 0 24.6665 5.37258 24.6665 12ZM8.28551 17.4164C7.60253 17.6643 6.94067 17.0024 7.18852 16.3194L9.52478 9.88164C9.69785 9.40473 10.0735 9.02911 10.5504 8.85604L16.9881 6.51978C17.6711 6.27193 18.333 6.93379 18.0851 7.61677L15.7489 14.0545C15.5758 14.5314 15.2002 14.9071 14.7233 15.0801L8.28551 17.4164ZM13.6071 10.9977C14.143 11.5336 14.143 12.4024 13.6071 12.9383C13.0713 13.4742 12.2024 13.4742 11.6666 12.9383C11.1307 12.4024 11.1307 11.5336 11.6666 10.9977C12.2024 10.4619 13.0713 10.4619 13.6071 10.9977Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="pb-[1px] text-dark-gray font-nintendo">Explore</span>
                </a>
                <a href="#"
                    class="flex shop-link justify-center gap-[6px] text-gray-800 font-semibold text-[0.875rem] items-center">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" width="17"
                        role="presentation" alt="" data-testid="EshopFilledIcon" size="24" color="#E60012">
                        <path
                            d="M14.3999 3.95H11.5499C11.2499 2 10.3499 0 7.94987 0C5.54987 0 4.64987 2 4.34987 3.95H1.49987L0.699868 14.25C0.599868 15.2 1.34987 16 2.34987 16H13.6499C14.5999 16 15.3499 15.2 15.2999 14.25L14.3999 3.95ZM7.94987 1.45C9.09987 1.45 9.79987 2.3 10.0499 3.95H5.79987C6.09987 2.3 6.84987 1.45 7.94987 1.45Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="pb-[1px] text-dark-gray font-nintendo">Shop</span>
                </a>
                <a href="#"
                    class="flex support-link justify-center gap-[6px] text-gray-800 font-semibold text-[0.875rem] items-center">
                    <svg width="17" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        role="presentation" alt="" data-testid="SupportShieldIcon" size="24"
                        color="#E60012">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.833008 5.81122L11.2908 0L21.8231 5.81122C21.8975 11.2613 21.8231 17.762 11.2908 24C1.88356 18.4765 1.43645 12.7231 1.08966 8.26043C1.02212 7.39132 0.958383 6.57117 0.833008 5.81122ZM9.43606 13.572C9.43606 14.064 9.68806 14.31 10.1921 14.31H10.9121C11.1281 14.31 11.2901 14.274 11.3981 14.202C11.5061 14.118 11.5841 13.98 11.6321 13.788L11.6681 13.482C11.7041 13.182 11.8061 12.912 11.9741 12.672C12.1421 12.432 12.3401 12.204 12.5681 11.988C12.8081 11.76 13.0541 11.532 13.3061 11.304C13.5701 11.064 13.8101 10.806 14.0261 10.53C14.2541 10.254 14.4401 9.94202 14.5841 9.59402C14.7281 9.23402 14.8001 8.82002 14.8001 8.35202C14.8001 7.82402 14.6861 7.35002 14.4581 6.93002C14.2421 6.51002 13.9481 6.15602 13.5761 5.86802C13.2161 5.58002 12.7961 5.35802 12.3161 5.20202C11.8481 5.04602 11.3621 4.96802 10.8581 4.96802C10.2101 4.96802 9.65206 5.06402 9.18406 5.25602C8.71606 5.43602 8.34406 5.61602 8.06806 5.79602C7.86406 5.92802 7.75606 6.07802 7.74406 6.24602C7.73206 6.41402 7.79806 6.60002 7.94206 6.80402L8.24806 7.25402C8.38006 7.45802 8.54206 7.56602 8.73406 7.57802C8.92606 7.59002 9.12406 7.54202 9.32806 7.43402C9.49606 7.35002 9.68806 7.27202 9.90406 7.20002C10.1321 7.11602 10.3841 7.07402 10.6601 7.07402C11.1521 7.07402 11.5661 7.21802 11.9021 7.50602C12.2381 7.79402 12.4061 8.14802 12.4061 8.56802C12.4061 8.88002 12.3341 9.16202 12.1901 9.41402C12.0461 9.65402 11.8601 9.88802 11.6321 10.116C11.4161 10.332 11.1761 10.548 10.9121 10.764C10.6601 10.98 10.4201 11.214 10.1921 11.466C9.97606 11.706 9.79606 11.976 9.65206 12.276C9.50806 12.564 9.43606 12.9 9.43606 13.284V13.572ZM10.1921 15.858C9.68806 15.858 9.43606 16.11 9.43606 16.614V17.244C9.43606 17.748 9.68806 18 10.1921 18H10.9121C11.4041 18 11.6501 17.748 11.6501 17.244V16.614C11.6501 16.11 11.4041 15.858 10.9121 15.858H10.1921Z"
                            fill="currentColor"></path>
                    </svg>
                    <span class="pb-[1px] text-dark-gray font-nintendo">Support</span>
                </a>
            </nav>
        </div>

        <!-- Right side navigation -->
        <div class="flex items-center space-x-4 pr-4">
            <!-- Search -->
            <a href="#"
                class="relative search-link flex gap-[0.2rem] bg-[#f8f8f8] rounded-full px-3 py-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="#484848">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <span class="ml-1 text-dark-gray text-sm font-nintendo">Search</span>
            </a>

            <!-- Wishlist Heart -->
            <a href="#" class="text-gray-500 bg-light-gray rounded-full px-3 py-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16" role="presentation"
                    alt="" data-testid="HeartIcon" size="16" color="#484848">
                    <path
                        d="M22.3 1.3c-2.3 0-4.5 1-6.3 2.8-1.7-1.8-3.9-2.8-6.3-2.8C4.4 1.3 0 5.7 0 11.2c0 2.6 1.2 5.1 3.3 7.3L15 30.2c.3.3.6.4 1 .4.3 0 .7-.1 1-.4l11.6-11.6c1.5-1.8 3.3-4.3 3.3-7.5.1-5.4-4.3-9.8-9.6-9.8z"
                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                </svg>
            </a>

            <!-- Cart -->
            <a href="#" class="text-gray-500 bg-light-gray rounded-full px-3 py-2">
                <svg data-name="Shopping cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="16"
                    role="presentation" alt="" data-testid="ShoppingCartIcon" size="16" color="#484848">
                    <path fill="currentColor"
                        d="M23.12 28.073a2.248 2.248 0 1 0 2.25-2.326h-.005a2.288 2.288 0 0 0-2.245 2.326zm2.397-7.29a1.728 1.728 0 0 0 1.498-.982l4.844-11.686a1.544 1.544 0 0 0-.15-1.551 1.593 1.593 0 0 0-1.349-.673H8.44l-.55-2.895A1.494 1.494 0 0 0 6.393 1.6H1.598A1.606 1.606 0 0 0 0 3.255a1.548 1.548 0 0 0 1.598 1.654h3.496L7.49 18.973l-1.098 4.706a1.67 1.67 0 0 0 .25 1.395 1.529 1.529 0 0 0 1.198.673h18.675a1.656 1.656 0 0 0 0-3.31H9.937l.4-1.654zm-18.726 7.29a2.248 2.248 0 1 0 2.25-2.326h-.005a2.288 2.288 0 0 0-2.245 2.326z">
                    </path>
                </svg>
            </a>

            <!-- Login/Sign up button -->
            @guest
                <a href="#"
                    class="border auth-drawer border-nintendo-red font-nintendo rounded-full text-nintendo-red px-[15px] py-[1px]">
                    <span class="text-[0.875rem]"> Log in / Sign up
                    </span>
                </a>
            @endGuest

            @auth
                <div class="flex items-center gap-1 auth-drawer">
                    <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                        <span class="text-white text-xs font-bold">{{ substr(auth()->user()->name, 0, 1) }}</span>
                    </div>
                    <a href="#" class="text-dark-gray font-bold">
                        <span class="text-xs">{{ auth()->user()->name }}</span>
                    </a>
                </div>
            @endauth

            @if (auth()->check() && auth()->user()->hasPermissionTo('panel_access'))
                <a href="{{ url('/panel') }}"
                    class="border border-nintendo-red font-nintendo rounded-full text-nintendo-red px-[15px] py-[1px]">
                    <span class="text-[0.875rem]"> Panel
                    </span>
                </a>
            @endif

            <a href="#" class="ml-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" class="h-4 w-6">
                    <!-- US Flag SVG -->
                    <g fill-rule="evenodd">
                        <g stroke-width="1pt">
                            <path fill="#bd3d44" d="M0 0h640v480H0" />
                            <path fill="#fff"
                                d="M0 55.3h640v55.4H0m0 55.3h640v55.4H0m0 55.3h640V277H0m0 55.4h640v55.3H0m0 55.4h640V443H0" />
                        </g>
                        <path fill="#192f5d" d="M0 0h364.8v258.5H0" />
                        <path fill="#fff"
                            d="M30.4 11l3.4 10.3h10.6l-8.6 6.3 3.3 10.3-8.7-6.4-8.6 6.3L25 27.6l-8.7-6.3h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.3H166l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.9zm60.8 0l3.3 10.3h10.7l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.9zM60.8 37l3.3 10.2H75l-8.7 6.2 3.2 10.3-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.7l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM30.4 62.6l3.4 10.4h10.6l-8.6 6.2 3.3 10.3-8.7-6.3-8.6 6.3L25 79.2l-8.7-6.2h10.9zm60.8 0l3.3 10.4h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.4H166l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.2h10.9zm60.8 0l3.3 10.4h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zm60.8 0l3.3 10.4h10.7l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.4h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM60.8 88.6l3.3 10.2H75l-8.7 6.3 3.2 10.2-8.5-6.3-8.7 6.3 3.1-10.2-8.4-6.3h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zM30.4 114.5l3.4 10.2h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zM60.8 140.3l3.3 10.3H75l-8.7 6.2 3.2 10.3-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0l3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.3h10.7l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM30.4 166.1l3.4 10.3h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.3-8.7-6.2h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.3H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.2h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zm60.8 0l3.3 10.3h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM60.8 192l3.3 10.2H75l-8.7 6.3 3.2 10.2-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM30.4 217.9l3.4 10.2h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9z" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</header>

<!-- Mobile header -->
<header class="lg:hidden bg-nintendo-red py-2">
    <div class="flex items-center border-gray-200 justify-between">
        <!-- Nintendo Logo -->
        <div class="flex">
            <div class="bg-nintendo-red flex items-center px-[10px]">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Nintendo.svg" alt="Nintendo"
                    class="h-8">
            </div>

        </div>

        <!-- Right side navigation -->
        <div class="flex items-center justify-center space-x-4 pr-4">
            <div class="text-white">
                <div class="flex items-center gap-1 justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18" role="presentation"
                        alt="" data-testid="MyNintendoIcon" size="52" color="white">
                        <path
                            d="M24.8 10.8c-2.2-4-6.2-6.4-10.8-6.4C8.6 4.4 3 8 3 14c0 4.2 3.6 5.9 3.8 6 .6.3 1.3 0 1.6-.5l2.1-3.9 1.5 2.9c.2.4.6.7 1.1.7.5 0 .9-.3 1.1-.7l1.5-2.9 2 3.8c.3.6 1 .8 1.6.5.6-.3.8-1 .5-1.6l-3.1-5.9c-.2-.4-.6-.6-1.1-.6-.4 0-.9.3-1.1.7L13 15.4l-1.5-2.9c-.2-.4-.6-.6-1.1-.7-.4 0-.9.2-1.1.6L7 17.1c-.7-.6-1.4-1.6-1.4-3.2 0-4.5 4.4-7.2 8.6-7.2 3.9 0 7.2 2.1 8.9 5.7.2.4.7.7 1.2.7h.3c3 0 5.1 2.7 5.1 5.1 0 2.9-2.3 5.2-5.2 5.2-1.2 0-2.3-.5-2.9-.9-.4-.3-1-.3-1.5 0-1 .8-3.9 2.7-8.1 2.7-4.8 0-8.4-2.7-9.7-4.3-.4-.5-1.2-.6-1.7-.1-.6.5-.7 1.2-.2 1.8.4.5 4.5 5.1 11.6 5.1 4.1 0 7.1-1.5 8.9-2.7 1 .6 2.3.9 3.5.9 4.3 0 7.6-3.3 7.6-7.6-.1-3.6-2.9-7.3-7.2-7.5z"
                            fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                    </svg>
                    <h3 class="text-[0.8rem] font-[600]">My Nintendo Store</h3>
                </div>
            </div>
            <!-- US Flag -->
            <a href="#" class="ml-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 480" class="h-4 w-6">
                    <!-- US Flag SVG -->
                    <g fill-rule="evenodd">
                        <g stroke-width="1pt">
                            <path fill="#bd3d44" d="M0 0h640v480H0"></path>
                            <path fill="#fff"
                                d="M0 55.3h640v55.4H0m0 55.3h640v55.4H0m0 55.3h640V277H0m0 55.4h640v55.3H0m0 55.4h640V443H0">
                            </path>
                        </g>
                        <path fill="#192f5d" d="M0 0h364.8v258.5H0"></path>
                        <path fill="#fff"
                            d="M30.4 11l3.4 10.3h10.6l-8.6 6.3 3.3 10.3-8.7-6.4-8.6 6.3L25 27.6l-8.7-6.3h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.3H166l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.9zm60.8 0l3.3 10.3h10.7l-8.6 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.3-8.7-6.4-8.7 6.3 3.4-10.2-8.8-6.3h10.9zM60.8 37l3.3 10.2H75l-8.7 6.2 3.2 10.3-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.7l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM30.4 62.6l3.4 10.4h10.6l-8.6 6.2 3.3 10.3-8.7-6.3-8.6 6.3L25 79.2l-8.7-6.2h10.9zm60.8 0l3.3 10.4h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.4H166l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.2h10.9zm60.8 0l3.3 10.4h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zm60.8 0l3.3 10.4h10.7l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.4h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM60.8 88.6l3.3 10.2H75l-8.7 6.3 3.2 10.2-8.5-6.3-8.7 6.3 3.1-10.2-8.4-6.3h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zM30.4 114.5l3.4 10.2h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zM60.8 140.3l3.3 10.3H75l-8.7 6.2 3.2 10.3-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0l3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.3h10.7l-8.6 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.3h10.8l-8.7 6.2 3.3 10.3-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM30.4 166.1l3.4 10.3h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.3-8.7-6.2h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.3H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.7-6.2h10.9zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zm60.8 0l3.3 10.3h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.3h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM60.8 192l3.3 10.2H75l-8.7 6.3 3.2 10.2-8.5-6.3-8.7 6.3 3.1-10.3-8.4-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.7zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.3-8.6-6.2h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.3-8.8-6.2h10.9zM30.4 217.9l3.4 10.2h10.6l-8.6 6.3 3.3 10.2-8.7-6.3-8.6 6.3 3.2-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.7zm60.8 0l3.3 10.2H166l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.7-6.3h10.9zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9zm60.8 0l3.3 10.2h10.7l-8.6 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.3-10.2-8.6-6.3h10.8zm60.8 0l3.3 10.2h10.8l-8.7 6.3 3.3 10.2-8.7-6.3-8.7 6.3 3.4-10.2-8.8-6.3h10.9z" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</header>


@if ($hasBanner)
    <div class="bg-light-gray py-3 flex justify-center items-center border-gray-200">
        <div class="px-4 flex flex-col md:flex-row items-center justify-center md:justify-between text-sm">
            <!-- item 1 -->
            <div class="flex items-center mb-2 text-[1rem] md:mb-0">
                <div class="hidden md:block">
                    <svg data-name="Layer 2 copy" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        width="24" role="presentation" alt="" data-testid="ShippingTruckArrowIcon"
                        color="#E60012" size="24">
                        <path
                            d="M6.57 27.352a3.373 3.373 0 1 1 3.372-3.372 3.376 3.376 0 0 1-3.373 3.372zm17.288 0a3.373 3.373 0 1 1 3.372-3.372 3.376 3.376 0 0 1-3.372 3.372z"
                            fill="currentColor"></path>
                        <path
                            d="M31.519 14.29l-3.889-3.888a1.643 1.643 0 0 0-1.161-.481h-4.4V4.648H3.436A3.327 3.327 0 0 0 0 7.831V23.98h2.196a4.373 4.373 0 0 1 8.746 0h8.535a4.373 4.373 0 0 1 8.746 0h2.134A1.643 1.643 0 0 0 32 22.336v-6.884a1.643 1.643 0 0 0-.481-1.162zM15.87 12.94l-3.946 3.946a.44.44 0 0 1-.311.13.445.445 0 0 1-.169-.034.44.44 0 0 1-.271-.407v-1.918H7.412a.44.44 0 0 1-.44-.44V11.04a.44.44 0 0 1 .44-.44h3.762V8.683a.44.44 0 0 1 .751-.311l3.946 3.946a.44.44 0 0 1 0 .622zm12.422 2.26a.66.66 0 0 1-.66.66h-4.718a.66.66 0 0 1-.66-.66v-2.834a.66.66 0 0 1 .66-.66h3.156a.66.66 0 0 1 .467.193l1.561 1.562a.66.66 0 0 1 .194.466z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <div class="flex items-center justify-center text-center">
                    <span class="ml-3 text-xs sm:text-base">
                        <strong class="mx-1 text-gray-600 font-nintendo">Free shipping</strong>
                        <span class="mx-1 text-gray-600">on orders $50 or more</span>
                        <a href="#" class=" text-dark-gray font-nintendo font-[700] underline mr-3">Restrictions
                            apply.</a>
                    </span>
                </div>
            </div>

            <!-- Separator -->
            <div class="hidden lg:block h-6 border-r border-gray-300 mx-4"></div>

            <!-- item 2 -->
            <div class="flex items-center mb-2 lg:flex hidden text-[1rem] md:mb-0">
                <div class="sm:flex hidden">
                    <svg data-name="My Nintendo points" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        width="24" role="presentation" alt="" data-testid="MyNintendoPointsIcon"
                        color="#E60012" size="24">
                        <path fill="currentColor"
                            d="M31.7 13.474a11.843 11.843 0 0 0-.734-2.336 12.781 12.781 0 0 0-1.135-2.102 13.331 13.331 0 0 0-1.501-1.835 11.276 11.276 0 0 0-1.836-1.502 12.78 12.78 0 0 0-2.102-1.134 13.589 13.589 0 0 0-2.336-.734 12.638 12.638 0 0 0-5.005 0 1 1 0 0 0-.334.133A12.652 12.652 0 0 0 0 15.977 12.703 12.703 0 0 0 12.68 28.69a12.851 12.851 0 0 0 4.07-.668 1 1 0 0 0 .334.134 12.493 12.493 0 0 0 2.503.267 12.758 12.758 0 0 0 2.503-.267 11.843 11.843 0 0 0 2.335-.734 12.78 12.78 0 0 0 2.103-1.135 13.332 13.332 0 0 0 1.835-1.501 11.275 11.275 0 0 0 1.501-1.836A12.78 12.78 0 0 0 31 20.849a13.589 13.589 0 0 0 .734-2.335A12.493 12.493 0 0 0 32 16.01a15.954 15.954 0 0 0-.3-2.536zM12.68 26.287a10.088 10.088 0 0 1-7.274-3.036 10.27 10.27 0 0 1-3.003-7.308A10.088 10.088 0 0 1 5.438 8.67 10.323 10.323 0 0 1 20.02 23.285a10.405 10.405 0 0 1-7.341 3.003zm16.717-8.275a12.07 12.07 0 0 1-.567 1.869 10.503 10.503 0 0 1-.934 1.701 8.722 8.722 0 0 1-1.235 1.469 12.52 12.52 0 0 1-1.468 1.234 10.504 10.504 0 0 1-1.702.935 7.539 7.539 0 0 1-1.869.567c-.333.067-.7.133-1.034.167.4-.3.768-.634 1.135-.968A12.8 12.8 0 0 0 21.689 7a10.593 10.593 0 0 0-1.134-1 9.569 9.569 0 0 1 1.034.166 12.07 12.07 0 0 1 1.869.568 10.503 10.503 0 0 1 1.702.934 8.723 8.723 0 0 1 1.468 1.235 12.52 12.52 0 0 1 1.234 1.468 10.504 10.504 0 0 1 .935 1.702 7.539 7.539 0 0 1 .567 1.868 10.27 10.27 0 0 1 .2 2.036 8.392 8.392 0 0 1-.167 2.035z">
                        </path>
                        <path fill="currentColor"
                            d="M15.082 14.141a6.515 6.515 0 0 0-.767-.066c-.067-.2-.2-.434-.3-.701-.468-1.035-.768-1.502-1.335-1.502s-.868.467-1.335 1.502c-.1.233-.233.5-.3.7-.2.034-.467.034-.734.067-1.135.134-1.669.267-1.836.768a.735.735 0 0 0-.033.267c0 .4.234.734 1.068 1.468a6.793 6.793 0 0 0 .567.5c-.067.2-.1.468-.167.735a7.634 7.634 0 0 0-.167 1.2.949.949 0 0 0 .334.802.797.797 0 0 0 .467.166 3.271 3.271 0 0 0 1.502-.6c.233-.134.467-.267.667-.4.2.1.4.266.668.4.967.567 1.501.734 1.935.467a.922.922 0 0 0 .4-.834 8.175 8.175 0 0 0-.166-1.201c-.067-.267-.134-.534-.167-.768a6.795 6.795 0 0 0 .567-.5c.8-.735 1.068-1.068 1.068-1.469a.735.735 0 0 0-.034-.267c-.233-.433-.767-.6-1.902-.734z">
                        </path>
                        <path fill="currentColor"
                            d="M12.713 8.035a7.928 7.928 0 0 0-5.606 13.547 1.18 1.18 0 1 0 1.669-1.668 5.612 5.612 0 0 1-1.635-3.937 5.473 5.473 0 0 1 1.635-3.938 5.553 5.553 0 0 1 3.937-1.635 5.473 5.473 0 0 1 3.938 1.635 1.18 1.18 0 1 0 1.668-1.668 7.906 7.906 0 0 0-5.606-2.336z">
                        </path>
                    </svg>
                </div>
                <div class="flex items-center justify-center text-center">
                    <span class="ml-3 text-xs sm:text-base">Redeem your
                        <strong class="mx-1 text-gray-600 font-nintendo">My Nintendo Platinum
                            Points</strong>
                        <span class="text-gray-600">for</span>
                        <a href="#" class="ml-1 text-dark-gray font-nintendo font-[700] underline mr-3">fun
                            rewards</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
@endif


<!-- ========================== hidden ========================= -->

<!-- Dropdown Menus -->
<!-- start Explore Dropdown -->
<div id="explore-dropdown" class="lg:block hidden rounded-b-[20px]">
    <!-- Right side - Featured content -->
    <div class="gap-32 mb-12 flex justify-center items-center">
        <!-- Featured Item 1 -->
        <a href="#" class="block group flex align-center justify-center flex-col">
            <div class="overflow-hidden rounded-lg mb-2">
                <img src="{{ asset('assets/images/explore-1.avif') }}" alt="Featured content"
                    class="w-auto h-[100px] transition-transform">
            </div>
            <h4 class="font-[600] text-gray-700 text-xl group-hover:text-nintendo-red transition-colors">
                Nintendo Switch 2</h4>
        </a>

        <!-- Featured Item 2 -->
        <a href="#" class="block group flex align-center justify-center flex-col">
            <div class="overflow-hidden rounded-lg mb-2">
                <img src="{{ asset('assets/images/explore-2.avif') }}" alt="Featured content"
                    class="w-auto h-[100px] transition-transform">
            </div>
            <h4 class="font-[600] text-gray-700 text-xl group-hover:text-nintendo-red transition-colors">
                Nintendo Switch</h4>
        </a>

        <!-- Featured Item 3 -->
        <a href="#" class="block flex align-center justify-center group flex-col">
            <div class="overflow-hidden rounded-lg mb-2">
                <img src="{{ asset('assets/images/explore-3.avif') }}" alt="Featured content"
                    class="w-auto h-[100px] transition-transform duration-300 group-hover:scale-105">
            </div>
            <h4 class="font-[600] text-center text-gray-700 text-xl group-hover:text-nintendo-red transition-colors">
                Games</h4>
        </a>

        <!-- Featured Item 4 -->
        <a href="#" class="block group flex align-center justify-center flex-col">
            <div class="overflow-hidden rounded-lg mb-2">
                <img src="{{ asset('assets/images/explore-4.avif') }}" alt="Featured content"
                    class="w-auto h-[100px] ml-7 transition-transform duration-300 group-hover:scale-105">
            </div>
            <h4 class="font-[600] text-center text-gray-700 text-xl group-hover:text-nintendo-red transition-colors">
                Nintendo Switch Online</h4>
        </a>
    </div>
    <hr>
    <div class="flex pt-6 mb-6 justify-center gap-7 align-center">
        <a href=""
            class="flex align-center justify-center gap-3 border-[1px] border-gray-300 rounded-full px-3 py-2 shadow-md transition-shadow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation"
                alt="" data-testid="NewsIcon" size="18" color="currentColor">
                <path fill="#E60012"
                    d="M31.92 3.62a1.945 1.945 0 0 0-1.953-1.932H1.874A1.945 1.945 0 0 0-.08 3.62v10.068h32zm-32 11.692v7.201a2.027 2.027 0 0 0 1.954 1.998h8.711a2.777 2.777 0 0 1 2.178 1.073q2.97 4.736 3.315 4.728.344-.009 3.315-4.837a2.677 2.677 0 0 1 2.177-.964h8.398a2.027 2.027 0 0 0 1.953-1.998v-7.201zm14 5.15c0 .056-.07.1-.155.1H3.077c-.086 0-.156-.044-.156-.1v-1.051c0-.055.07-.1.156-.1h10.688c.086 0 .156.045.156.1z">
                </path>
            </svg>
            <p class="text-gray-600 font-[600] text-xl"> News and Events
            </p>
        </a>
        <a href=""
            class="flex align-center justify-center gap-3 border-[1px] border-gray-300 rounded-full px-3 py-2 shadow-md hover:shadow-lg transition-shadow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation"
                alt="" data-testid="StarPlayNintendoIcon" size="18" color="#E60012">
                <path
                    d="M18.9 19.1c-.9 0-1-1.5-1-3.4s0-3.5 1-3.4c.9.1 1.1 1.4 1.1 3.3-.1 2-.2 3.5-1.1 3.5m-5.8 0c-.9 0-1-1.6-1-3.4 0-1.9.2-3.2 1.1-3.3 1-.1 1 1.5 1 3.4-.1 1.8-.2 3.3-1.1 3.3M32 12.4c-.1-.3-1.4-.6-5.6-1.1-2.6-.3-5.1-.5-5.2-.5-.2 0-.4-.2-.5-.4-.6-1.6-1.3-3.3-2-4.8C17.1 1.8 16.4.7 15.9.7c-.4 0-1 1.1-2.8 5-1.1 2.4-2 4.8-2 4.8-.1.2-.3.4-.5.4 0 0-2.5.1-5.1.4-4.1.4-5.4.7-5.5 1-.1.4.8 1.3 3.9 4.2 1.9 1.8 3.9 3.4 3.9 3.4.2.1.2.3.2.4v.1s-.6 2.5-1.2 5.1c-.6 3-1.1 5.4-.7 5.7.4.4 1.8-.5 5.2-2.4 2.3-1.3 4.4-2.7 4.5-2.7.2-.1.4-.1.6 0 0 0 2.2 1.4 4.4 2.7 3.4 2 4.7 2.7 5.2 2.4.4-.3 0-2.1-.7-5.7-.5-2.6-1.2-5.1-1.2-5.1v-.1c0-.2.1-.3.2-.4 0 0 1.9-1.6 3.9-3.3 3-2.9 3.9-3.9 3.8-4.2"
                    fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
            </svg>
            <p class="text-gray-600 font-[600] text-xl"> Play Nintendo
            </p>
        </a>
        <a href=""
            class="flex align-center justify-center gap-3 border-[1px] border-gray-300 rounded-full px-3 py-2 shadow-md hover:shadow-lg transition-shadow">
            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="24   " role="presentation"
                alt="" data-testid="MyNintendoTileIcon" size="18" color="#E60012">
                <path
                    d="M26.667 0H5.333A5.333 5.333 0 0 0 0 5.333v21.334A5.333 5.333 0 0 0 5.333 32h21.334A5.333 5.333 0 0 0 32 26.667V5.333A5.333 5.333 0 0 0 26.667 0zm-5.105 22.423a5.212 5.212 0 0 1-2.37-.602 10.482 10.482 0 0 1-13.67-1.608.803.803 0 0 1 1.228-1.036 8.866 8.866 0 0 0 11.914 1.04.803.803 0 0 1 .986-.005 3.461 3.461 0 0 0 5.41-2.888 3.495 3.495 0 0 0-3.39-3.416c-.016 0-.036 0-.063-.002a.962.962 0 0 0-.12.003.806.806 0 0 1-.778-.455 6.54 6.54 0 0 0-5.992-3.848c-2.82 0-5.738 1.802-5.738 4.819-.003.818.35 1.596.969 2.132l1.688-3.147a.803.803 0 0 1 1.423.015l.982 1.926.983-1.926a.8.8 0 0 1 .71-.438c.3 0 .574.164.716.428l2.076 3.933a.8.8 0 0 1-.03.804.802.802 0 0 1-1.391-.054l-1.353-2.564-.995 1.95a.803.803 0 0 1-1.431-.001l-1-1.96-1.384 2.58a.805.805 0 0 1-1.046.349 4.563 4.563 0 0 1-2.524-4.027C7.372 10.403 11.107 8 14.717 8a8.081 8.081 0 0 1 7.209 4.308 5.063 5.063 0 0 1-.363 10.115z"
                    fill="currentColor" fill-rule="evenodd"></path>
            </svg>
            <p class="text-gray-600 font-[600] text-xl"> My Nintendo
            </p>
        </a>
        <a href=""
            class="flex align-center justify-center gap-3 border-[1px] border-gray-300 rounded-full px-3 py-2 shadow-md hover:shadow-lg transition-shadow">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation"
                alt="" data-testid="MobileIcon" size="18" color="#E60012">
                <path fill="#E60012"
                    d="M20.542 5.78h-9.087a.588.588 0 0 0-.614.571v19.2a.589.589 0 0 0 .614.568h9.087a.592.592 0 0 0 .613-.568V6.35a.59.59 0 0 0-.613-.571z">
                </path>
                <path fill="currentColor"
                    d="M23.28.027H8.733a1.421 1.421 0 0 0-1.452 1.377v29.212a1.36 1.36 0 0 0 .429.978 1.475 1.475 0 0 0 1.023.4H23.27a1.47 1.47 0 0 0 1.021-.399 1.355 1.355 0 0 0 .428-.975V1.39A1.405 1.405 0 0 0 23.28.026zm-9.903 1.225h5.236a.943.943 0 0 1 .936.925.943.943 0 0 1-.936.925h-5.236a.943.943 0 0 1-.936-.925.943.943 0 0 1 .936-.925zm9.29 25.67a.736.736 0 0 1-.792.65H10.123a.733.733 0 0 1-.795-.65V4.98a.73.73 0 0 1 .795-.653h11.752a.734.734 0 0 1 .793.653z">
                </path>
            </svg>
            <p class="text-gray-600 font-[600] text-xl"> Apps
            </p>
        </a>
    </div>
    <hr>
    <div class="flex pt-4 bg-light-gray pb-4 justify-center gap-4 items-center">
        <p class="text-gray-800 font-[600] text-md mx-3">Meet the Characters:</p>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/mario.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">Super Mario</span>
        </a>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/zelda.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">The Legend of Zelda</span>
        </a>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/splatoon.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">Splatoon</span>
        </a>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/kirby.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">Kirby</span>
        </a>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/pikmin.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">Pikmin</span>
        </a>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/crossing.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">Animal Crossing</span>
        </a>
        <a href="" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/metroid.avif') }}" alt="Mario" class="w-7 h-7">
            <span class="text-gray-600 font-[600] text-md">Metroid</span>
        </a>
    </div>
</div>
<!-- end Explore Dropdown -->

<!-- start Shop Dropdown -->
<div id="shop-dropdown" class="lg:block hidden">
    <div class="px-4 pr-16">
        <div class="flex">
            <!-- Left side - My Nintendo Store -->
            <div class="w-1/4 pr-12 h-full">
                <div class="bg-nintendo-red rounded-lg p-5 text-white">
                    <div class="flex items-center gap-3 justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="52"
                            role="presentation" alt="" data-testid="MyNintendoIcon" size="52"
                            color="white">
                            <path
                                d="M24.8 10.8c-2.2-4-6.2-6.4-10.8-6.4C8.6 4.4 3 8 3 14c0 4.2 3.6 5.9 3.8 6 .6.3 1.3 0 1.6-.5l2.1-3.9 1.5 2.9c.2.4.6.7 1.1.7.5 0 .9-.3 1.1-.7l1.5-2.9 2 3.8c.3.6 1 .8 1.6.5.6-.3.8-1 .5-1.6l-3.1-5.9c-.2-.4-.6-.6-1.1-.6-.4 0-.9.3-1.1.7L13 15.4l-1.5-2.9c-.2-.4-.6-.6-1.1-.7-.4 0-.9.2-1.1.6L7 17.1c-.7-.6-1.4-1.6-1.4-3.2 0-4.5 4.4-7.2 8.6-7.2 3.9 0 7.2 2.1 8.9 5.7.2.4.7.7 1.2.7h.3c3 0 5.1 2.7 5.1 5.1 0 2.9-2.3 5.2-5.2 5.2-1.2 0-2.3-.5-2.9-.9-.4-.3-1-.3-1.5 0-1 .8-3.9 2.7-8.1 2.7-4.8 0-8.4-2.7-9.7-4.3-.4-.5-1.2-.6-1.7-.1-.6.5-.7 1.2-.2 1.8.4.5 4.5 5.1 11.6 5.1 4.1 0 7.1-1.5 8.9-2.7 1 .6 2.3.9 3.5.9 4.3 0 7.6-3.3 7.6-7.6-.1-3.6-2.9-7.3-7.2-7.5z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                        </svg>
                        <h3 class="text-lg lg:text-[2rem] font-nintendo">My Nintendo Store</h3>
                    </div>
                    <a href="#" class="text-white font-bold text-center underline block mb-2">Shop
                        all</a>
                </div>
            </div>

            <!-- Right side - Menu items -->
            <div class="w-3/4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] py-3 gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32"
                            role="presentation" alt="" data-testid="DPadIcon" size="18"
                            color="#E60012">
                            <path
                                d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9.1.5-.3.9-.9.9z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Games</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 py-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg data-name="Switch lite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                            width="32" role="presentation" alt="" data-testid="SwitchLiteIcon"
                            size="18" color="#E60012">
                            <path
                                d="M28.737 9.41H3.262a3.218 3.218 0 0 0-3.218 3.218v7.164a3.218 3.218 0 0 0 3.218 3.218h25.475a3.218 3.218 0 0 0 3.219-3.218v-7.164a3.218 3.218 0 0 0-3.219-3.218zm.112 2.173a.563.563 0 1 1-.563.563.563.563 0 0 1 .563-.563zm0 2.32a.563.563 0 1 1-.563.564.563.563 0 0 1 .563-.563zM3.146 12.106a1.2 1.2 0 1 1-1.2 1.201 1.2 1.2 0 0 1 1.2-1.2zm1.437 5.85a.125.125 0 0 1-.125.125h-.731a.133.133 0 0 0-.133.134v.73a.126.126 0 0 1-.125.126h-.636a.125.125 0 0 1-.126-.126v-.73a.133.133 0 0 0-.132-.134h-.732a.125.125 0 0 1-.125-.125v-.636a.125.125 0 0 1 .125-.125h.732a.133.133 0 0 0 .132-.133v-.73a.125.125 0 0 1 .126-.126h.636a.126.126 0 0 1 .125.125v.731a.133.133 0 0 0 .133.133h.73a.125.125 0 0 1 .126.125zm1.674 3.654h19.497V10.82H6.257zm20.807-8.302a.563.563 0 1 1 .563.563.563.563 0 0 1-.563-.563zm1.778 5.532a1.2 1.2 0 1 1 1.2-1.2 1.2 1.2 0 0 1-1.2 1.2zm1.23-4.97a.563.563 0 1 1 .562-.562.563.563 0 0 1-.563.563z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Hardware</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32"
                            role="presentation" alt="" data-testid="TShirtIcon" size="18"
                            color="#E60012">
                            <path
                                d="M7.735 29.333V11.101l-4.428 2.82L0 8.282l6.704-4.705a4.913 4.913 0 0 1 2.825-.891c.922 0 2.034-.005 2.66-.018.415 1.682 2.402 2.107 3.81 2.107 1.41 0 3.397-.425 3.812-2.107.626.013 1.738.019 2.66.018a4.906 4.906 0 0 1 2.825.891L32 8.281l-3.307 5.64-4.427-2.82v18.232H7.735z"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Merchandise</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 py-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32"
                            role="presentation" alt="" data-testid="SalesTagIcon" size="18"
                            color="#E60012">
                            <path
                                d="M16.5.4c.2-.3.6-.4 1-.4l9.4.2c.4 0 .7.2 1 .4l3.5 3.5c.3.3.4.6.4 1l.2 9.4c0 .4-.1.8-.4 1.1l-16 16c-.6.6-1.5.6-2.1 0L.4 18.5c-.6-.6-.6-1.5 0-2.1L16.5.4zm6.7 4.1c-1.2 1.2-1.2 3.1 0 4.3s3.1 1.2 4.3 0c1.2-1.2 1.2-3.1 0-4.3-1.2-1.2-3.2-1.2-4.3 0z"
                                fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Sales and Deals</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32"
                            role="presentation" alt="" data-testid="StarFilledIcon" size="18"
                            color="#E60012">
                            <path
                                d="M31.993 12.369c-.107-.34-1.43-.62-5.599-1.09-2.626-.297-5.15-.455-5.175-.456a.577.577 0 0 1-.504-.37 137.666 137.666 0 0 0-1.982-4.837C17.093 1.821 16.428.71 15.973.713c-.412-.005-1.027 1.122-2.767 4.975a112.804 112.804 0 0 0-2.014 4.781.58.58 0 0 1-.506.367c-.025.002-2.527.146-5.13.43-4.145.453-5.48.706-5.552 1.069-.073.398.774 1.333 3.88 4.163a114.143 114.143 0 0 0 3.921 3.393.58.58 0 0 1 .193.594c-.006.025-.645 2.472-1.183 5.06-.615 2.958-1.072 5.368-.709 5.66.447.364 1.796-.484 5.2-2.416A123.355 123.355 0 0 0 15.75 26.1a.58.58 0 0 1 .622 0c.022.014 2.163 1.355 4.448 2.68 3.45 1.998 4.747 2.668 5.163 2.42.422-.301.042-2.118-.706-5.708a121.87 121.87 0 0 0-1.189-5.106.58.58 0 0 1 .195-.595c.019-.015 1.946-1.588 3.873-3.333 3.055-2.765 3.932-3.734 3.837-4.09"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Exclusives</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="32"
                            role="presentation" alt="" data-testid="CharacterIcon" size="18"
                            color="#E60012">
                            <path
                                d="M29.399 25.007a5.387 5.387 0 0 0-.539-.329 1.978 1.978 0 0 0-1.844-1.78 2.688 2.688 0 0 0-2.383 1.43.834.834 0 0 0-1.218.222 20.438 20.438 0 0 0-2.64-1.37 6.13 6.13 0 0 0 .37-3.363c.58.065 1.117.116 1.27.12.347.02.692-.053 1-.211.632-.352 1.238-.75 1.813-1.189a.769.769 0 0 0 1.138-.814 3.835 3.835 0 0 0 2.865-2.689c.244-.795.047-1.342-.258-1.53a1.045 1.045 0 0 0-.975-1.343.963.963 0 0 0-1.241-.945c-.055-.397-.456-.644-.984-.546a2.55 2.55 0 0 0-1.647 1.42.916.916 0 0 0-1.11.15 2.786 2.786 0 0 0-.233 2.614c-.397-.14-.968.41-.606 1.097l-.347.215c-.171.11-.171.11-.562.078a10.434 10.434 0 0 1-2.21-.64 2.688 2.688 0 0 0 2.027-1.465.812.812 0 0 0 .597-1.159c.605-.206.944-.848.773-1.463a2.574 2.574 0 0 0 1.989-1.19c.992-1.84-.385-3.705-2.043-3.261a4.432 4.432 0 0 0-1.89 1.066c-.268-.679-.57-1.354-.808-1.909.902-.561 3.233-3.42 2.73-3.966-.493-.535-2.798.185-3.842.805A5.003 5.003 0 0 0 17.372.72c-.87-.87-2.28-1.046-3.887 0A10.588 10.588 0 0 0 9.48 7.816c-3.033 1.276-2.201 4.364 1.046 4.895.151.452.44.846.828 1.124-.78.219-.473 1.068.296 1.073-.944.073-1.88.22-2.802.438a.893.893 0 0 0-1.594.024 3.87 3.87 0 0 0-2.708-.288 2.192 2.192 0 0 0-1.826 2.44 1.252 1.252 0 0 0 .126 1.781.975.975 0 0 0 .757 1.458c-.183.918 1.05 1.592 2.657.532 1.05.977 2.412.052 2.599-1.652.457.248 1.007-.012 1.066-.689a19.002 19.002 0 0 1 2.963-.433c0 .493-.091.981-.27 1.44a3.973 3.973 0 0 0-.444 4.064.67.67 0 0 1-.223.187 14.946 14.946 0 0 0-.738-.363.681.681 0 0 0-.984-.609 1.634 1.634 0 0 0-2.02-.76 2.25 2.25 0 0 0-.649-.177.52.52 0 0 0-.548.231 7.972 7.972 0 0 0-.818 1.792.288.288 0 0 0 .084.333c.074.062.154.117.24.162a9.789 9.789 0 0 0-2.058 4.078c-.08.359-.045.583.126.691.183.123.38.226.585.307.196.98 1.08 1.67 2.079 1.622a3.013 3.013 0 0 0 2.417-2.06c.272.003.53-.12.698-.335a6.07 6.07 0 0 0 3.456.771 5.93 5.93 0 0 0 3.13-2.516 22.596 22.596 0 0 1 5.152 2.5c.054.52.51.903 1.03.867.36.859 1.445 1.358 2.015 1.007.223.083.45.154.68.211.328.077.377.04.526-.14.364-.457.667-.958.9-1.492.114-.259.125-.423.014-.546a1.667 1.667 0 0 0-.234-.193 8.894 8.894 0 0 0 2.529-4.01c.07-.329.013-.44-.164-.575"
                                fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Characters</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Shop Dropdown -->

<!-- start Support Dropdown -->
<div id="support-dropdown" class="lg:block hidden">
    <div class="px-4 pr-16">
        <div class="flex flex-col lg:flex-row">
            <!-- Left side - My Nintendo Store -->
            <div class="w-[450px] pr-12 h-full">
                <div class="bg-nintendo-red rounded-lg py-9 text-white">
                    <div class="flex items-center gap-3 justify-center mb-4">
                        <h3 class="text-lg lg:text-[2rem] font-nintendo">Support Home</h3>
                    </div>
                    <a href="#" class="text-white font-bold text-center underline block mb-2">Get help
                        now</a>
                </div>
            </div>

            <!-- Right side - Menu items -->
            <div class="w-[100%]">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] py-3 gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg width="32" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg"
                            role="presentation" alt="" data-testid="ChecklistIcon" size="18"
                            color="#E60012">
                            <path
                                d="M68.8607 26.0699L62.4857 19.6949L58.6607 23.5199L68.8607 33.7199L85.4507 17.1637L81.6107 13.3912L68.8645 26.1374L68.8607 26.0699ZM68.8607 60.6637L62.4857 54.2887L58.6795 58.1812L68.8795 68.3812L85.4507 51.7387L81.6107 47.8462L68.8645 60.5924L68.8607 60.6637ZM68.8607 95.4787L62.5045 89.1899L58.6795 93.0149L68.8607 103.162L85.4507 86.5574L81.6257 82.7324L68.8795 95.4787H68.8607ZM54.187 35.1337H89.932V39.4762H54.187V35.1337ZM54.187 71.0512H89.932V75.3937H54.187V71.0512ZM54.187 103.987H89.932V108.33H54.187V103.987ZM46.087 37.6987H32.4445C30.7945 37.6874 29.4557 36.3524 29.4482 34.7024V21.0562C29.4595 19.4062 30.7945 18.0674 32.4445 18.0599H46.0907C47.7407 18.0712 49.0795 19.4062 49.087 21.0562V34.7024C49.0757 36.3524 47.7407 37.6912 46.0907 37.6987H46.087ZM33.652 33.4949H44.8832V22.2637H33.652V33.4949ZM46.087 71.9624H32.4445C30.7945 71.9512 29.4557 70.6162 29.4482 68.9662V55.3049C29.4595 53.6549 30.7945 52.3162 32.4445 52.3087H46.0907C47.7407 52.3199 49.0795 53.6549 49.087 55.3049V68.9512C49.087 70.6087 47.7482 71.9549 46.0907 71.9662L46.087 71.9624ZM33.652 67.7624H44.8832V56.4599H33.652V67.7624ZM46.087 105.885H32.4445C30.7945 105.874 29.4557 104.539 29.4482 102.889V89.1937C29.4595 87.5437 30.7945 86.2049 32.4445 86.1974H46.0907C47.7407 86.2087 49.0795 87.5437 49.087 89.1937V102.84C49.087 102.851 49.087 102.862 49.087 102.874C49.087 104.531 47.7482 105.877 46.0907 105.889L46.087 105.885ZM33.652 101.681H44.8832V90.4499H33.652V101.681ZM87.4682 118.785H32.617C25.1207 118.785 19.042 112.706 19.042 105.21V14.7862C19.042 7.28993 25.1207 1.21118 32.617 1.21118H87.4682C94.927 1.25993 100.957 7.31993 100.957 14.7862V105.21C100.957 112.676 94.927 118.736 87.472 118.785H87.4682ZM32.617 6.62243C28.1057 6.62243 24.4532 10.2787 24.4532 14.7862V105.21C24.4907 109.691 28.132 113.306 32.617 113.306H87.4682C91.9795 113.306 95.632 109.65 95.632 105.142V14.7862C95.632 10.2749 91.9757 6.62243 87.4682 6.62243H32.617Z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">My Support Dashboard</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 py-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg width="32" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg"
                            role="presentation" alt="" data-testid="NintendoSwitchIcon" size="18"
                            color="#E60012">
                            <path
                                d="M13.7387 43.1727C14.6152 43.1727 15.4721 43.4327 16.2009 43.9196C16.9297 44.4066 17.4977 45.0988 17.8332 45.9086C18.1686 46.7184 18.2564 47.6095 18.0854 48.4692C17.9144 49.3289 17.4923 50.1185 16.8725 50.7383C16.2527 51.3581 15.463 51.7802 14.6033 51.9512C13.7436 52.1222 12.8525 52.0345 12.0427 51.699C11.2329 51.3636 10.5408 50.7956 10.0538 50.0667C9.56681 49.3379 9.30688 48.4811 9.30688 47.6046C9.30688 47.0226 9.42152 46.4463 9.64424 45.9086C9.86696 45.3709 10.1934 44.8823 10.6049 44.4708C11.4361 43.6397 12.5633 43.1727 13.7387 43.1727Z"
                                fill="currentColor"></path>
                            <path
                                d="M15.784 59.7955C15.784 60.2 15.6641 60.5955 15.4393 60.9318C15.2145 61.2682 14.8951 61.5304 14.5213 61.6852C14.1476 61.84 13.7363 61.8805 13.3395 61.8016C12.9427 61.7227 12.5783 61.5279 12.2922 61.2418C12.0062 60.9557 11.8113 60.5913 11.7324 60.1945C11.6535 59.7977 11.694 59.3865 11.8488 59.0127C12.0036 58.6389 12.2658 58.3195 12.6022 58.0947C12.9386 57.87 13.334 57.75 13.7386 57.75C14.2811 57.75 14.8013 57.9655 15.1849 58.3491C15.5685 58.7327 15.784 59.253 15.784 59.7955Z"
                                fill="currentColor"></path>
                            <path
                                d="M9.89336 65.6864C9.4888 65.6864 9.09334 65.5664 8.75696 65.3416C8.42059 65.1169 8.15842 64.7974 8.0036 64.4237C7.84879 64.0499 7.80828 63.6386 7.8872 63.2419C7.96613 62.8451 8.16094 62.4806 8.447 62.1945C8.73306 61.9085 9.09753 61.7137 9.49431 61.6347C9.89109 61.5558 10.3024 61.5963 10.6761 61.7511C11.0499 61.906 11.3693 62.1681 11.5941 62.5045C11.8188 62.8409 11.9388 63.2363 11.9388 63.6409C11.9388 64.1834 11.7233 64.7037 11.3397 65.0873C10.9561 65.4709 10.4358 65.6864 9.89336 65.6864Z"
                                fill="currentColor"></path>
                            <path
                                d="M13.7386 69.5318C13.334 69.5318 12.9386 69.4118 12.6022 69.1871C12.2658 68.9623 12.0036 68.6429 11.8488 68.2691C11.694 67.8953 11.6535 67.4841 11.7324 67.0873C11.8113 66.6905 12.0062 66.326 12.2922 66.04C12.5783 65.7539 12.9427 65.5591 13.3395 65.4802C13.7363 65.4013 14.1476 65.4418 14.5213 65.5966C14.8951 65.7514 15.2145 66.0136 15.4393 66.3499C15.6641 66.6863 15.784 67.0818 15.784 67.4863C15.784 68.0288 15.5685 68.5491 15.1849 68.9327C14.8013 69.3163 14.2811 69.5318 13.7386 69.5318Z"
                                fill="currentColor"></path>
                            <path
                                d="M17.5907 65.6864C17.1862 65.6864 16.7907 65.5664 16.4543 65.3416C16.118 65.1169 15.8558 64.7974 15.701 64.4237C15.5462 64.0499 15.5057 63.6386 15.5846 63.2419C15.6635 62.8451 15.8583 62.4806 16.1444 62.1945C16.4305 61.9085 16.7949 61.7137 17.1917 61.6347C17.5885 61.5558 17.9997 61.5963 18.3735 61.7511C18.7473 61.906 19.0667 62.1681 19.2915 62.5045C19.5162 62.8409 19.6362 63.2363 19.6362 63.6409C19.6362 64.1834 19.4207 64.7037 19.0371 65.0873C18.6535 65.4709 18.1332 65.6864 17.5907 65.6864Z"
                                fill="currentColor"></path>
                            <path
                                d="M106.425 42.9682C106.83 42.9682 107.225 43.0881 107.561 43.3129C107.898 43.5376 108.16 43.8571 108.315 44.2309C108.47 44.6046 108.51 45.0159 108.431 45.4127C108.352 45.8095 108.158 46.1739 107.871 46.46C107.585 46.746 107.221 46.9409 106.824 47.0198C106.427 47.0987 106.016 47.0582 105.642 46.9034C105.269 46.7486 104.949 46.4864 104.724 46.15C104.5 45.8136 104.38 45.4182 104.38 45.0136C104.38 44.4711 104.595 43.9509 104.979 43.5673C105.362 43.1837 105.883 42.9682 106.425 42.9682Z"
                                fill="currentColor"></path>
                            <path
                                d="M108.471 52.7114C108.471 53.1159 108.351 53.5114 108.126 53.8478C107.901 54.1841 107.582 54.4463 107.208 54.6011C106.834 54.7559 106.423 54.7965 106.026 54.7175C105.629 54.6386 105.265 54.4438 104.979 54.1577C104.693 53.8717 104.498 53.5072 104.419 53.1104C104.34 52.7136 104.381 52.3024 104.535 51.9286C104.69 51.5549 104.952 51.2354 105.289 51.0106C105.625 50.7859 106.021 50.6659 106.425 50.6659C106.968 50.6659 107.488 50.8814 107.871 51.265C108.255 51.6486 108.471 52.1689 108.471 52.7114Z"
                                fill="currentColor"></path>
                            <path
                                d="M100.534 48.8591C100.534 48.4545 100.654 48.059 100.879 47.7227C101.104 47.3863 101.423 47.1241 101.797 46.9693C102.171 46.8145 102.582 46.774 102.979 46.8529C103.375 46.9318 103.74 47.1267 104.026 47.4127C104.312 47.6988 104.507 48.0632 104.586 48.46C104.665 48.8568 104.624 49.2681 104.469 49.6418C104.314 50.0156 104.052 50.335 103.716 50.5598C103.38 50.7846 102.984 50.9045 102.58 50.9045C102.037 50.9045 101.517 50.689 101.133 50.3054C100.75 49.9218 100.534 49.4016 100.534 48.8591Z"
                                fill="currentColor"></path>
                            <path
                                d="M106.425 69.3341C105.549 69.3341 104.692 69.0743 103.963 68.5877C103.235 68.101 102.667 67.4092 102.331 66.5998C101.995 65.7904 101.907 64.8997 102.078 64.0402C102.248 63.1807 102.67 62.391 103.289 61.7709C103.908 61.1508 104.697 60.7282 105.556 60.5564C106.415 60.3847 107.306 60.4715 108.116 60.8058C108.926 61.1402 109.619 61.7072 110.106 62.4351C110.594 63.163 110.855 64.0192 110.857 64.8954C110.858 65.478 110.744 66.055 110.521 66.5935C110.299 67.132 109.973 67.6214 109.561 68.0336C109.149 68.4459 108.661 68.7729 108.122 68.9961C107.584 69.2192 107.007 69.3341 106.425 69.3341Z"
                                fill="currentColor"></path>
                            <path
                                d="M110.27 50.9113C109.866 50.9113 109.47 50.7914 109.134 50.5666C108.798 50.3419 108.535 50.0224 108.381 49.6487C108.226 49.2749 108.185 48.8636 108.264 48.4668C108.343 48.0701 108.538 47.7056 108.824 47.4195C109.11 47.1335 109.474 46.9387 109.871 46.8597C110.268 46.7808 110.679 46.8213 111.053 46.9761C111.427 47.131 111.746 47.3931 111.971 47.7295C112.196 48.0659 112.316 48.4613 112.316 48.8659C112.316 49.4084 112.1 49.9286 111.717 50.3122C111.333 50.6958 110.813 50.9113 110.27 50.9113Z"
                                fill="currentColor"></path>
                            <path
                                d="M111.818 38.4545C112.539 38.4634 113.227 38.7536 113.737 39.2631C114.246 39.7727 114.537 40.4612 114.545 41.1818V79.3636C114.537 80.0842 114.246 80.7728 113.737 81.2823C113.227 81.7919 112.539 82.0821 111.818 82.0909H8.18182C7.46125 82.0821 6.77268 81.7919 6.26312 81.2823C5.75356 80.7728 5.46339 80.0842 5.45455 79.3636V41.1818C5.46339 40.4612 5.75356 39.7727 6.26312 39.2631C6.77268 38.7536 7.46125 38.4634 8.18182 38.4545H111.818ZM111.818 33H8.18182C6.01186 33 3.93079 33.862 2.3964 35.3964C0.86201 36.9308 0 39.0119 0 41.1818V79.3636C0 81.5336 0.86201 83.6147 2.3964 85.1491C3.93079 86.6834 6.01186 87.5455 8.18182 87.5455H111.818C113.988 87.5455 116.069 86.6834 117.604 85.1491C119.138 83.6147 120 81.5336 120 79.3636V41.1818C120 39.0119 119.138 36.9308 117.604 35.3964C116.069 33.862 113.988 33 111.818 33Z"
                                fill="currentColor"></path>
                            <path
                                d="M95.4545 43.9091V76.6364H24.5454V43.9091H95.4545ZM98.1818 41.1818H21.8181V79.3637H98.1818V41.1818Z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Nintendo Swtich Family</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve"
                            width="32" role="presentation" alt="" data-testid="DPadOutlineIcon"
                            size="18" color="#E60012">
                            <path
                                d="M19.5 32h-7.1c-1.5 0-2.8-1.2-2.8-2.8v-6.9H2.7c-1.5 0-2.8-1.2-2.8-2.8v-7.1C0 11 1.2 9.7 2.7 9.7h6.9V2.8c0-1.5 1.2-2.8 2.8-2.8h7.1c1.5 0 2.8 1.2 2.8 2.8v6.9h6.9c1.5 0 2.8 1.2 2.8 2.8v7.1c0 1.5-1.2 2.8-2.8 2.8h-6.9v6.9c0 1.5-1.3 2.7-2.8 2.7zM2.7 11.7c-.4 0-.8.3-.8.8v7.1c0 .4.3.8.8.8h8.9v8.9c0 .4.3.8.8.8h7.1c.4 0 .8-.3.8-.8v-8.9h8.9c.4 0 .8-.3.8-.8v-7.1c0-.4-.3-.8-.8-.8h-8.9V2.8c0-.4-.3-.8-.8-.8h-7.1c-.4 0-.8.3-.8.8v8.9H2.7z"
                                fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"
                                d="M8.1 16.8H4.6c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.5c.5.1.9.5.9 1 0 .4-.4.8-.9.8zm8.8 10.5c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.5c0-.5.4-.9.9-.9s.9.4.9.9v3.5zm0-19.2c0 .5-.4.9-.9.9s-.9-.4-.9-.9V4.6c0-.5.4-.9.9-.9s.9.4.9.9v3.5zm10.5 8.7h-3.5c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.5c.5 0 .9.4.9.9s-.4.9-.9.9z">
                            </path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Other Systems</span>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 py-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg width="32" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                            role="presentation" alt="" data-testid="AccountsServicesIcon" size="18"
                            color="#E60012">
                            <path
                                d="M20 10.444C20.0007 8.51031 19.4267 6.61897 18.349 5.00455C17.2713 3.39014 15.7374 2.12369 13.9376 1.36229C12.1378 0.60089 10.1512 0.378043 8.22438 0.72139C6.29751 1.06474 4.51509 1.95917 3.09822 3.29375C1.68134 4.62832 0.692354 6.34432 0.253924 8.22889C-0.184505 10.1135 -0.0530853 12.0837 0.631883 13.8952C1.31685 15.7066 2.52523 17.2797 4.10713 18.4192C5.68903 19.5587 7.57486 20.2144 9.53068 20.3052C9.62386 20.3052 9.71818 20.3153 9.8125 20.3175H10.1557C10.2511 20.3175 10.3455 20.3175 10.4409 20.3063C13.0136 20.1942 15.4432 19.1062 17.2239 17.2691C19.0046 15.4319 19.999 12.9871 20 10.444ZM5.35227 18.0753C5.71992 17.1504 6.36255 16.3572 7.19556 15.8001C8.02856 15.2429 9.01288 14.948 10.0189 14.954C11.025 14.9601 12.0056 15.2669 12.8316 15.8341C13.6577 16.4013 14.2904 17.2022 14.6466 18.1314C13.9205 18.5803 11.9193 19.4119 9.9875 19.4119C8.05568 19.4119 6.05568 18.5388 5.35227 18.0753ZM15.4432 17.6264C14.9937 16.5659 14.237 15.6602 13.2682 15.0229C12.2993 14.3856 11.1614 14.0451 9.99734 14.0441C8.83325 14.0431 7.6948 14.3818 6.72487 15.0175C5.75495 15.6532 4.99676 16.5577 4.54546 17.6174C3.02047 16.4849 1.89495 14.9073 1.32831 13.108C0.761681 11.3087 0.782668 9.37888 1.3883 7.592C1.99393 5.80511 3.15351 4.25172 4.70277 3.15184C6.25203 2.05197 8.11243 1.46138 10.0205 1.46374C11.9285 1.46609 13.7874 2.06127 15.3339 3.16497C16.8803 4.26866 18.036 5.82492 18.6371 7.61329C19.2382 9.40166 19.2543 11.3315 18.6831 13.1294C18.1119 14.9273 16.9824 16.5022 15.4545 17.6309L15.4432 17.6264Z"
                                fill="currentColor"></path>
                            <path
                                d="M10 5.95497C10.6743 5.95497 11.3334 6.15243 11.894 6.52237C12.4546 6.89231 12.8916 7.41813 13.1496 8.03332C13.4076 8.64852 13.4751 9.32546 13.3436 9.97854C13.2121 10.6316 12.8874 11.2315 12.4106 11.7024C11.9338 12.1732 11.3264 12.4939 10.6651 12.6238C10.0038 12.7537 9.31833 12.687 8.69541 12.4322C8.07248 12.1774 7.54005 11.7459 7.16545 11.1922C6.79086 10.6385 6.59092 9.9876 6.59092 9.32172C6.59092 8.4288 6.95009 7.57246 7.58942 6.94107C8.22874 6.30968 9.09586 5.95497 10 5.95497ZM10 5.05717C9.14595 5.05717 8.31108 5.30728 7.60095 5.77588C6.89083 6.24447 6.33736 6.9105 6.01053 7.68975C5.68369 8.46899 5.59818 9.32645 5.7648 10.1537C5.93142 10.9809 6.34268 11.7408 6.94659 12.3372C7.5505 12.9336 8.31993 13.3398 9.15757 13.5043C9.99522 13.6689 10.8635 13.5844 11.6525 13.2617C12.4415 12.9389 13.116 12.3923 13.5904 11.691C14.0649 10.9897 14.3182 10.1652 14.3182 9.32172C14.3182 8.19069 13.8632 7.10599 13.0534 6.30623C12.2436 5.50647 11.1453 5.05717 10 5.05717Z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Accounts And My
                            Nintendo</span>
                    </a>

                    <a href="#"
                        class="flex items-center border-[1px] border-[#dadada] gap-3 rounded-full justify-center bg-white hover:shadow-lg transition-shadow">
                        <svg width="32" viewBox="0 0 152 152" fill="none" xmlns="http://www.w3.org/2000/svg"
                            role="presentation" alt="" data-testid="RepairsIcon" size="18"
                            color="#E60012">
                            <path
                                d="M62 44.18H31.13C29.8638 44.1749 28.6101 44.4306 27.4471 44.9312C26.284 45.4319 25.2366 46.1668 24.37 47.09L2.28 71C0.820798 72.5638 0.00640683 74.6212 0 76.76V113.25C0.00909084 113.716 0.110024 114.175 0.297014 114.602C0.484003 115.029 0.753371 115.414 1.08967 115.736C1.42598 116.059 1.8226 116.312 2.25681 116.48C2.69102 116.649 3.15427 116.731 3.62 116.72H18.83C18.83 116.87 18.83 117.03 18.83 117.18C18.83 120.893 20.305 124.454 22.9305 127.079C25.556 129.705 29.117 131.18 32.83 131.18C36.543 131.18 40.104 129.705 42.7295 127.079C45.355 124.454 46.83 120.893 46.83 117.18C46.83 117.03 46.83 116.87 46.83 116.72H62C62.4657 116.731 62.929 116.649 63.3632 116.48C63.7974 116.312 64.194 116.059 64.5303 115.736C64.8666 115.414 65.136 115.029 65.323 114.602C65.51 114.175 65.6109 113.716 65.62 113.25V47.65C65.6109 47.1842 65.51 46.7248 65.323 46.2982C65.136 45.8715 64.8666 45.4859 64.5303 45.1635C64.194 44.8412 63.7974 44.5883 63.3632 44.4196C62.929 44.2508 62.4657 44.1694 62 44.18ZM32.8 123.18C31.2087 123.18 29.6826 122.548 28.5574 121.423C27.4321 120.297 26.8 118.771 26.8 117.18C26.8 117.02 26.8 116.87 26.8 116.72H38.8C38.8 116.87 38.8 117.02 38.8 117.18C38.8 118.768 38.1706 120.291 37.0497 121.416C35.9288 122.54 34.4078 123.175 32.82 123.18H32.8ZM57.64 108.72H8V76.72C8.01276 76.5966 8.06542 76.4807 8.15 76.39L30.25 52.48C30.3664 52.3673 30.5043 52.2791 30.6555 52.2207C30.8067 52.1623 30.968 52.1349 31.13 52.14H57.64V108.72Z"
                                fill="currentColor"></path>
                            <path
                                d="M140 20H81.09C77.9074 20 74.8552 21.2643 72.6047 23.5147C70.3543 25.7652 69.09 28.8174 69.09 32V104.72C69.09 107.903 70.3543 110.955 72.6047 113.205C74.8552 115.456 77.9074 116.72 81.09 116.72H105.19C105.19 116.87 105.19 117.03 105.19 117.18C105.19 120.893 106.665 124.454 109.291 127.079C111.916 129.705 115.477 131.18 119.19 131.18C122.903 131.18 126.464 129.705 129.089 127.079C131.715 124.454 133.19 120.893 133.19 117.18C133.19 117.03 133.19 116.87 133.19 116.72H140C143.183 116.72 146.235 115.456 148.485 113.205C150.736 110.955 152 107.903 152 104.72V32C152 28.8174 150.736 25.7652 148.485 23.5147C146.235 21.2643 143.183 20 140 20ZM119.18 123.18C117.589 123.18 116.063 122.548 114.937 121.423C113.812 120.297 113.18 118.771 113.18 117.18C113.18 117.02 113.18 116.87 113.18 116.72H125.18C125.18 116.87 125.18 117.02 125.18 117.18C125.18 118.771 124.548 120.297 123.423 121.423C122.297 122.548 120.771 123.18 119.18 123.18ZM144 104.72C143.987 105.777 143.561 106.787 142.814 107.534C142.067 108.281 141.057 108.707 140 108.72H81.09C80.0332 108.707 79.0233 108.281 78.2759 107.534C77.5286 106.787 77.103 105.777 77.09 104.72V32C77.103 30.9432 77.5286 29.9333 78.2759 29.1859C79.0233 28.4386 80.0332 28.013 81.09 28H140C141.057 28.013 142.067 28.4386 142.814 29.1859C143.561 29.9333 143.987 30.9432 144 32V104.72Z"
                                fill="currentColor"></path>
                            <path
                                d="M34.55 54.54C33.7474 54.5467 32.9569 54.7357 32.238 55.0925C31.5191 55.4494 30.8906 55.9648 30.4 56.6L10.4 78.72H55.27V54.54H34.55ZM51.27 74.72H19.38L33.38 59.29C33.43 59.22 33.49 59.16 33.55 59.09C33.6639 58.9283 33.8131 58.7947 33.9864 58.6994C34.1597 58.6041 34.3525 58.5496 34.55 58.54H51.27V74.72Z"
                                fill="currentColor"></path>
                            <path
                                d="M132.84 55C132.766 54.6459 132.598 54.3183 132.353 54.0522C132.108 53.7861 131.796 53.5914 131.449 53.4888C131.102 53.3862 130.734 53.3795 130.384 53.4696C130.034 53.5596 129.714 53.7429 129.46 54L123.3 60.17C122.94 60.5118 122.462 60.7024 121.965 60.7024C121.468 60.7024 120.99 60.5118 120.63 60.17L117.78 57.32C117.434 56.9699 117.24 56.4974 117.24 56.005C117.24 55.5126 117.434 55.0401 117.78 54.69C119.33 53.05 121.72 50.63 124.34 48.35C124.636 48.0909 124.85 47.7501 124.954 47.3703C125.057 46.9904 125.046 46.5884 124.923 46.2147C124.799 45.841 124.567 45.5121 124.257 45.2693C123.947 45.0266 123.573 44.8807 123.18 44.85C115.89 44.29 110.37 46.03 106.77 50.01C101.94 55.34 102.22 63.01 102.51 65.8L90.19 78.11C88.6713 79.6322 87.8184 81.6947 87.8184 83.845C87.8184 85.9953 88.6713 88.0578 90.19 89.58C90.9422 90.3329 91.8355 90.9301 92.8187 91.3376C93.8019 91.7451 94.8557 91.9549 95.92 91.9549C96.9843 91.9549 98.0381 91.7451 99.0213 91.3376C100.005 90.9301 100.898 90.3329 101.65 89.58L114.31 76.9C120.86 77.51 125.84 76.03 129.13 72.46C135 66.06 132.93 55.47 132.84 55ZM126.19 69.72C123.67 72.46 119.51 73.49 113.82 72.79C113.518 72.7525 113.212 72.7844 112.924 72.8832C112.636 72.9819 112.375 73.145 112.16 73.36L98.82 86.75C98.0495 87.5218 97.0041 87.9559 95.9135 87.9568C94.823 87.9578 93.7768 87.5255 93.005 86.755C92.2332 85.9845 91.7991 84.9391 91.7982 83.8485C91.7972 82.758 92.2295 81.7118 93 80.94L106 67.94C106.228 67.7132 106.398 67.4349 106.495 67.1285C106.593 66.8221 106.615 66.4968 106.56 66.18C106.56 66.09 105.13 57.76 109.71 52.7C111.853 50.4809 114.742 49.1343 117.82 48.92C116.66 50.05 115.64 51.1 114.82 51.92C113.761 53.0296 113.18 54.5108 113.203 56.0445C113.225 57.5783 113.849 59.0418 114.94 60.12L117.8 63C118.906 64.1022 120.404 64.7212 121.965 64.7212C123.526 64.7212 125.024 64.1022 126.13 63L129.28 59.84C129.3 62.89 128.76 67 126.19 69.75V69.72Z"
                                fill="currentColor"></path>
                            <path
                                d="M96.37 79.93C95.6655 79.928 94.9762 80.1351 94.3895 80.5251C93.8027 80.9151 93.3448 81.4704 93.0739 82.1207C92.8029 82.771 92.731 83.4871 92.8672 84.1784C93.0034 84.8696 93.3417 85.5049 93.8392 86.0037C94.3366 86.5026 94.9709 86.8427 95.6618 86.9808C96.3526 87.119 97.0689 87.0491 97.72 86.78C98.3711 86.5108 98.9277 86.0545 99.3193 85.4689C99.711 84.8832 99.92 84.1945 99.92 83.49C99.92 82.5476 99.5463 81.6436 98.8808 80.9762C98.2154 80.3089 97.3124 79.9326 96.37 79.93ZM96.37 85.05C96.061 85.052 95.7585 84.9622 95.5006 84.792C95.2428 84.6218 95.0412 84.3788 94.9216 84.0939C94.802 83.8091 94.7697 83.4951 94.8288 83.1918C94.8878 82.8886 95.0356 82.6097 95.2534 82.3905C95.4711 82.1713 95.7491 82.0218 96.052 81.9607C96.3548 81.8997 96.669 81.93 96.9547 82.0478C97.2403 82.1656 97.4845 82.3655 97.6564 82.6223C97.8282 82.879 97.92 83.181 97.92 83.49C97.92 83.902 97.757 84.2973 97.4666 84.5896C97.1762 84.8818 96.782 85.0474 96.37 85.05Z"
                                fill="currentColor"></path>
                        </svg>
                        <span class="text-gray-600 text-lg font-nintendo">Repair</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Support Dropdown -->

<!-- search DropDown -->
<div id="search-dropdown" class="fullscreen-dropdown lg:block hidden">
    <div class="flex items-center justify-start gap-4 pb-1">
        <span class="bg-nintendo-red flex items-center px-[10px] py-[14px] w-[105px]">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Nintendo.svg" alt="Nintendo"
                class="h-7">
        </span>
        <div class="flex-grow">
            <div class="relative flex items-center">
                <div class="input-icon py-[9px]">
                    <svg data-name="Magnifying glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        class="sc-1r59ztq-1 OMXJg" width="18" role="presentation" alt="" size="18"
                        color="#E60012">
                        <path
                            d="M31.564 28.745l-8.73-8.73a12.66 12.66 0 1 0-2.804 2.834l8.715 8.715a1.5 1.5 0 0 0 2.114 0l.705-.705a1.5 1.5 0 0 0 0-2.114zm-18.966-7.433A8.611 8.611 0 1 1 21.21 12.7a8.62 8.62 0 0 1-8.612 8.612z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <input type="text" placeholder="Search games, hardware, news, etc"
                    class="w-[400px] py-2 pl-3 pr-4 border-b-[1px] text-sm search-dropdown-input" autofocus>
            </div>
        </div>
    </div>

    <!-- Search content -->
    <div class="px-[120px] py-2 flex flex-wrap">
        <!-- Trending Topics -->
        <div class="mb-10 w-1/3">
            <h3 class="text-md font-[600] mb-4">Trending Topics</h3>
            <div class="flex align-center justify-between flex-col gap-3">
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Nintendo Switch 2</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Nintendo Swtich 2 games</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">How to buy Nintendo Switch 2</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Online services</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Games</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Games on sale</a>
            </div>
        </div>

        <!-- Top Store Products -->
        <div class="max-w-[800px]">
            <h3 class="text-md font-[600] mb-4">Top Store Products</h3>
            <div class="grid grid-cols-2 gap-4 flex-wrap">
                <!-- Xenoblade Chronicles X: Definitive Edition Card -->
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt="" data-testid="heartspark"
                                        color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt="" data-testid="heartspark"
                                        color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Xenoblade Chronicles X: Definitive Edition Card -->
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt="" data-testid="heartspark"
                                        color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt="" data-testid="heartspark"
                                        color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Login/Register Drawer -->
<div id="auth-drawer"
    class="fixed inset-y-0 right-0 w-full md:w-[350px] bg-gray-100 shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-[300]">
    <div class="h-full flex flex-col">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 ">
            @guest
                <h2 class="text-xl font-bold text-gray-600">Log in / Sign up</h2>
            @endguest
            @auth
                <h2 class="text-xl font-bold text-gray-600">Welcome {{ Auth::user()->name }}</h2>
            @endauth
            <button id="close-auth-drawer" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Content -->
        <div class="flex-grow overflow-y-auto p-4">
            <!-- Nintendo Icons -->
            @guest
                <div
                    class="bg-white rounded-lg shadow-sm border border-gray-200 p-3 px-3 hover:shadow-md transition-shadow">
                    <div class="flex justify-center items-center gap-4 mb-1">
                        <img src="{{ asset('assets/images/auth-img.avif') }}" alt="">
                    </div>

                    <!-- Benefits Text -->
                    <div class="text-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">With a free account, you can</h3>
                        <ul class="text-left max-w-xs mx-5">
                            <li class="flex items-start mb-2 text-gray-800 font-[600] text-sm">
                                <svg class="w-3 h-3 mt-1 text-nintendo-red mr-2 " fill="#484848" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Shop online</span>
                            </li>
                            <li class="flex items-start mb-2 text-gray-800 font-[600] text-sm">
                                <svg class="w-3 h-3 mt-1 text-nintendo-red mr-2 " fill="#484848" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Earn My Nintendo points</span>
                            </li>
                            <li class="flex items-start mb-2 text-gray-800 font-[600] text-sm">
                                <svg class="w-3 h-3 mt-1 text-nintendo-red mr-2 " fill="#484848" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Save a Wish List</span>
                            </li>
                        </ul>
                    </div>
                </div>


                <!-- Login Button -->
                <div class="mb-4 mt-4">
                    <a href="{{ route('login') }}"
                        class="block w-full bg-nintendo-red rounded-lg text-white text-center py-3 font-bold hover:bg-red-700 transition-colors">
                        Log in
                    </a>
                </div>

                <!-- Sign Up Button -->
                <div class="mb-6">
                    <a href="{{ route('register') }}"
                        class="block w-full bg-white text-gray-800 rounded-lg text-center py-3 rounded-sm font-bold hover:bg-gray-50 transition-colors">
                        Sign up
                    </a>
                </div>
            @endguest

            @auth
                <div class="bg-white rounded-lg shadow-sm border py-4 border-gray-200 mb-4">
                    <div class="flex items-center justify-center flex-col mb-3">
                        <div class="w-20 h-20 rounded-full bg-orange-500 flex items-center justify-center">
                            <span class="text-white text-4xl font-bold">{{ substr(auth()->user()->name, 0, 1) }}</span>
                        </div>
                        <div>
                            <h3 class="font-semibold text-center mt-2 text-xl text-gray-800">{{ auth()->user()->name }}
                            </h3>
                            <p class="text-sm text-center text-gray-500">Member since
                                {{ auth()->user()->created_at->format('Y') }}</p>
                        </div>
                    </div>
                    <div class="flex justify-center items-center space-x-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                    class="w-5 h-5 text-yellow-400" fill="currentColor">
                                    <path
                                        d="M31.8 11.6c-.1-.4-1.4-.6-5.6-1.1-2.6-.3-5.1-.5-5.2-.5-.2 0-.4-.2-.5-.4-.6-1.6-1.3-3.3-2-4.8C17.1 1.8 16.4.7 15.9.7c-.4 0-1 1.1-2.8 5-1.1 2.4-2 4.8-2 4.8-.1.2-.3.4-.5.4 0 0-2.5.1-5.1.4-4.1.4-5.4.7-5.5 1-.1.4.8 1.3 3.9 4.2 1.9 1.8 3.9 3.4 3.9 3.4.2.1.2.3.2.4v.1s-.6 2.5-1.2 5.1c-.6 3-1.1 5.4-.7 5.7.4.4 1.8-.5 5.2-2.4 2.3-1.3 4.4-2.7 4.5-2.7.2-.1.4-.1.6 0 0 0 2.2 1.4 4.4 2.7 3.4 2 4.7 2.7 5.2 2.4.4-.3 0-2.1-.7-5.7-.5-2.6-1.2-5.1-1.2-5.1v-.1c0-.2.1-.3.2-.4 0 0 1.9-1.6 3.9-3.3 3-2.9 3.9-3.9 3.8-4.2" />
                                </svg>
                                <div class="flex flex-col">
                                    <span class="text-sm font-medium">Gold Points</span>
                                    <span class="text-sm font-bold">0</span>
                                </div>
                            </div>
                        </div>

                        <div class="separator w-[1px] h-8 bg-gray-200"></div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18"
                                    role="presentation" alt="" class="text-gray-400 mr-1">
                                    <path fill="currentColor"
                                        d="M31.8 11.6c-.1-.4-1.4-.6-5.6-1.1-2.6-.3-5.1-.5-5.2-.5-.2 0-.4-.2-.5-.4-.6-1.6-1.3-3.3-2-4.8C17.1 1.8 16.4.7 15.9.7c-.4 0-1 1.1-2.8 5-1.1 2.4-2 4.8-2 4.8-.1.2-.3.4-.5.4 0 0-2.5.1-5.1.4-4.1.4-5.4.7-5.5 1-.1.4.8 1.3 3.9 4.2 1.9 1.8 3.9 3.4 3.9 3.4.2.1.2.3.2.4v.1s-.6 2.5-1.2 5.1c-.6 3-1.1 5.4-.7 5.7.4.4 1.8-.5 5.2-2.4 2.3-1.3 4.4-2.7 4.5-2.7.2-.1.4-.1.6 0 0 0 2.2 1.4 4.4 2.7 3.4 2 4.7 2.7 5.2 2.4.4-.3 0-2.1-.7-5.7-.5-2.6-1.2-5.1-1.2-5.1v-.1c0-.2.1-.3.2-.4 0 0 1.9-1.6 3.9-3.3 3-2.9 3.9-3.9 3.8-4.2">
                                    </path>
                                </svg>
                                <div class="flex flex-col">
                                    <span class="text-sm font-medium">Platinum Points</span>
                                    <span class="text-sm font-bold">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-3 border-t border-gray-200">
                        <div class="flex flex-col items-center justify-center rounded-lg p-3 pb-3">
                            <h4 class="font-semibold text-sm text-center text-gray-700">Level up with Nintendo Switch
                                Online</h4>
                            <a href="#" class="text-nintendo-red font-bold text-sm">Shop now</a>
                        </div>
                    </div>
                </div>
            @endauth

            <a href="#"
                class="flex items-center justify-between rounded-lg border-[1px] border-gray-200 py-3 px-4 bg-white mb-6 hover:bg-gray-50">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 5H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2zm0 12H5V7h14v10z">
                        </path>
                    </svg>
                    <span class="font-semibold">Order status</span>
                </div>
            </a>

            <!-- Additional Links -->
            <div class="bg-white rounded-lg border-[1px] border-gray-200">
                <a href="#"
                    class="flex items-center justify-between border-b-[1px] border-gray-200 py-3 px-4 bg-white rounded-sm hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                            </path>
                            <path
                                d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm3 7h-2v2h-2v-2H9v-2h2V9h2v2h2v2z">
                            </path>
                        </svg>
                        <span class="font-semibold">My Nintendo</span>
                    </div>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>

                <a href="#"
                    class="flex items-center justify-between py-3 px-4 bg-white border-b-[1px] border-gray-200 rounded-sm hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z">
                            </path>
                        </svg>
                        <span class="font-semibold">Redeem code</span>
                    </div>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>

                <a href="#"
                    class="flex items-center justify-between py-3 px-4 bg-white border-b-[1px] border-gray-200 rounded-sm hover:bg-gray-50">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                            </path>
                        </svg>
                        <span class="font-semibold">Account settings</span>
                    </div>
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                </a>
            </div>
            @auth
                <div>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="flex items-center justify-center text-white bg-blue-700 text-center py-3 rounded-lg mt-3 font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
    </div>
</div>


<!-- Mobile navigation bar -->
<nav class="fixed bottom-[-17px] shadow-2xl left-0 right-0 z-50 lg:hidden">
    <div>
        <!-- Menu -->
        <div style="box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1), 0 5px 15px rgba(0, 0, 0, 0.1)"
            class="relative bg-white rounded-full max-w-[450px] mx-auto py-0 shadow-lg px-12 flex justify-between items-center z-[100]">
            <a href="#" class="flex flex-col items-center justify-center text-gray-700 mobile-tabs-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" xml:space="preserve" width="24"
                    role="presentation" alt="" data-testid="HamburgerMenuIcon" color="currentColor"
                    size="24">
                    <path fill="currentColor" d="M0 12.8h32v6.4H0zM0 24h32v6.4H0zM0 1.6h32V8H0z"></path>
                </svg>
            </a>

            <!-- Wishlist -->
            <a href="#" class="flex flex-col items-center justify-center text-gray-700 pl-5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation"
                    alt="" data-testid="HeartIcon" color="currentColor" size="24">
                    <path
                        d="M22.3 1.3c-2.3 0-4.5 1-6.3 2.8-1.7-1.8-3.9-2.8-6.3-2.8C4.4 1.3 0 5.7 0 11.2c0 2.6 1.2 5.1 3.3 7.3L15 30.2c.3.3.6.4 1 .4.3 0 .7-.1 1-.4l11.6-11.6c1.5-1.8 3.3-4.3 3.3-7.5.1-5.4-4.3-9.8-9.6-9.8z"
                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                </svg>
            </a>

            <!-- Search (red circle in center) -->
            <a href="#" class="search-tab-icon flex flex-col items-center justify-center relative -top-2">
                <div class="bg-nintendo-red rounded-full p-[14px] shadow-md">
                    <svg data-name="Magnifying glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        width="32" role="presentation" alt="" size="32" color="#fff">
                        <path
                            d="M31.564 28.745l-8.73-8.73a12.66 12.66 0 1 0-2.804 2.834l8.715 8.715a1.5 1.5 0 0 0 2.114 0l.705-.705a1.5 1.5 0 0 0 0-2.114zm-18.966-7.433A8.611 8.611 0 1 1 21.21 12.7a8.62 8.62 0 0 1-8.612 8.612z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </a>

            <!-- Cart -->
            <a href="#" class="flex flex-col items-center justify-center text-gray-700">
                <svg data-name="Shopping cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24"
                    role="presentation" alt="" data-testid="ShoppingCartIcon" size="24"
                    color="currentColor">
                    <path fill="currentColor"
                        d="M23.12 28.073a2.248 2.248 0 1 0 2.25-2.326h-.005a2.288 2.288 0 0 0-2.245 2.326zm2.397-7.29a1.728 1.728 0 0 0 1.498-.982l4.844-11.686a1.544 1.544 0 0 0-.15-1.551 1.593 1.593 0 0 0-1.349-.673H8.44l-.55-2.895A1.494 1.494 0 0 0 6.393 1.6H1.598A1.606 1.606 0 0 0 0 3.255a1.548 1.548 0 0 0 1.598 1.654h3.496L7.49 18.973l-1.098 4.706a1.67 1.67 0 0 0 .25 1.395 1.529 1.529 0 0 0 1.198.673h18.675a1.656 1.656 0 0 0 0-3.31H9.937l.4-1.654zm-18.726 7.29a2.248 2.248 0 1 0 2.25-2.326h-.005a2.288 2.288 0 0 0-2.245 2.326z">
                    </path>
                </svg>
            </a>

            @guest
                <a href="#" id="mobile-user-icon"
                    class="flex flex-col items-center justify-center text-gray-700 pl-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" role="presentation"
                        alt="" data-testid="UserIcon" color="currentColor" size="24">
                        <path
                            d="M16.22 19.41A9.71 9.71 0 1 1 26 9.7a9.74 9.74 0 0 1-9.8 9.71M1.84 32a10.88 10.88 0 0 1 10.94-10.74h6.57A10.88 10.88 0 0 1 30.29 32H1.84"
                            fill="currentColor"></path>
                    </svg>
                </a>
            @endguest

            @auth
                <a href="#" id="mobile-user-icon"
                    class="flex flex-col items-center justify-center text-gray-700 pl-5">
                    <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                        <span class="text-white text-xs font-bold">{{ substr(auth()->user()->name, 0, 1) }}</span>
                    </div>
                </a>
            </div>
        @endauth
        <!-- Account with login panel open block -->
        <div class="relative mt-9">

            <!-- Login Panel (Mobile) -->
            <div
                class="mobile-login-panel fixed hidden inset-x-0 bottom-12 mx-auto sm:w-[90%] pb-12 max-w-[450px] bg-[#F3F4F6] rounded-lg shadow-xl overflow-y-auto max-h-[80vh]">
                <div class="p-4 bg-white border-b border-gray-200 flex items-center relative sticky top-0 z-10">
                    <h3 class="font-bold text-gray-600 text-lg flex-grow text-center">Log in / Sign up</h3>
                    <button
                        class="text-gray-500 bg-gray-300 rounded-full p-1 close-mobile-login-panel hover:text-gray-700 absolute right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="#fff">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Nintendo Icons -->
                <div>
                    @guest
                        <div class="bg-white mx-4 my-2 rounded-lg px-10 py-3">

                            <div class="flex justify-center items-center gap-4 mb-2">
                                <img src="{{ asset('assets/images/auth-img.avif') }}" alt="Nintendo characters"
                                    class="w-full">
                            </div>

                            <!-- Benefits Text -->
                            <div class="mb-3">
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">With a free account, you can</h3>
                                <ul class="w-fit">
                                    <li class="flex items-start mb-2 text-gray-800 font-semibold text-sm">
                                        <svg class="w-4 h-4 mt-0.5 text-gray-800 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Shop online</span>
                                    </li>
                                    <li class="flex items-start mb-2 text-gray-800 font-semibold text-sm">
                                        <svg class="w-4 h-4 mt-0.5 text-gray-800 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Earn My Nintendo points</span>
                                    </li>
                                    <li class="flex items-start mb-2 text-gray-800 font-semibold text-sm">
                                        <svg class="w-4 h-4 mt-0.5 text-gray-800 mr-2" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Save a Wish List</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="mb-2 px-4 mt-3">
                            <a href="{{ route('login') }}"
                                class="block w-full bg-nintendo-red rounded-lg text-white text-center py-3 font-bold hover:bg-red-700 transition-colors">
                                Log in
                            </a>
                        </div>

                        <!-- Sign Up Button -->
                        <div class="mb-6 px-4">
                            <a href="{{ route('register') }}"
                                class="block w-full bg-white border border-[#E60012] text-[#E60012] rounded-lg text-center py-3 font-bold hover:bg-gray-50 transition-colors">
                                Sign up
                            </a>
                        </div>
                    @endguest

                    @auth
                        <div class="p-3">
                            <div class="bg-white rounded-lg shadow-sm border py-4 border-gray-200 mb-4">
                                <div class="flex items-center justify-center flex-col mb-3">
                                    <div class="w-20 h-20 rounded-full bg-orange-500 flex items-center justify-center">
                                        <span
                                            class="text-white text-4xl font-bold">{{ substr(auth()->user()->name, 0, 1) }}</span>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-center mt-2 text-xl text-gray-800">
                                            {{ auth()->user()->name }}
                                        </h3>
                                        <p class="text-sm text-center text-gray-500">Member since
                                            {{ auth()->user()->created_at->format('Y') }}</p>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center space-x-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                                class="w-5 h-5 text-yellow-400" fill="currentColor">
                                                <path
                                                    d="M31.8 11.6c-.1-.4-1.4-.6-5.6-1.1-2.6-.3-5.1-.5-5.2-.5-.2 0-.4-.2-.5-.4-.6-1.6-1.3-3.3-2-4.8C17.1 1.8 16.4.7 15.9.7c-.4 0-1 1.1-2.8 5-1.1 2.4-2 4.8-2 4.8-.1.2-.3.4-.5.4 0 0-2.5.1-5.1.4-4.1.4-5.4.7-5.5 1-.1.4.8 1.3 3.9 4.2 1.9 1.8 3.9 3.4 3.9 3.4.2.1.2.3.2.4v.1s-.6 2.5-1.2 5.1c-.6 3-1.1 5.4-.7 5.7.4.4 1.8-.5 5.2-2.4 2.3-1.3 4.4-2.7 4.5-2.7.2-.1.4-.1.6 0 0 0 2.2 1.4 4.4 2.7 3.4 2 4.7 2.7 5.2 2.4.4-.3 0-2.1-.7-5.7-.5-2.6-1.2-5.1-1.2-5.1v-.1c0-.2.1-.3.2-.4 0 0 1.9-1.6 3.9-3.3 3-2.9 3.9-3.9 3.8-4.2" />
                                            </svg>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-medium">Gold Points</span>
                                                <span class="text-sm font-bold">0</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="separator w-[1px] h-8 bg-gray-200"></div>

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="18"
                                                role="presentation" alt="" class="text-gray-400 mr-1">
                                                <path fill="currentColor"
                                                    d="M31.8 11.6c-.1-.4-1.4-.6-5.6-1.1-2.6-.3-5.1-.5-5.2-.5-.2 0-.4-.2-.5-.4-.6-1.6-1.3-3.3-2-4.8C17.1 1.8 16.4.7 15.9.7c-.4 0-1 1.1-2.8 5-1.1 2.4-2 4.8-2 4.8-.1.2-.3.4-.5.4 0 0-2.5.1-5.1.4-4.1.4-5.4.7-5.5 1-.1.4.8 1.3 3.9 4.2 1.9 1.8 3.9 3.4 3.9 3.4.2.1.2.3.2.4v.1s-.6 2.5-1.2 5.1c-.6 3-1.1 5.4-.7 5.7.4.4 1.8-.5 5.2-2.4 2.3-1.3 4.4-2.7 4.5-2.7.2-.1.4-.1.6 0 0 0 2.2 1.4 4.4 2.7 3.4 2 4.7 2.7 5.2 2.4.4-.3 0-2.1-.7-5.7-.5-2.6-1.2-5.1-1.2-5.1v-.1c0-.2.1-.3.2-.4 0 0 1.9-1.6 3.9-3.3 3-2.9 3.9-3.9 3.8-4.2">
                                                </path>
                                            </svg>
                                            <div class="flex flex-col">
                                                <span class="text-sm font-medium">Platinum Points</span>
                                                <span class="text-sm font-bold">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 pt-3 border-t border-gray-200">
                                    <div class="flex flex-col items-center justify-center rounded-lg p-3 pb-3">
                                        <h4 class="font-semibold text-sm text-center text-gray-700">Level up with Nintendo
                                            Switch
                                            Online</h4>
                                        <a href="#" class="text-nintendo-red font-bold text-sm">Shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endauth

                    <!-- Order Status -->
                    <a href="#"
                        class="flex items-center justify-between border border-gray-200 py-3 px-4 bg-white mb-4 hover:bg-gray-50">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-nintendo-red mr-3" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 5H5a2 2 0 00-2 2v10a2 2 0 002 2h14a2 2 0 002-2V7a2 2 0 00-2-2zm0 12H5V7h14v10z">
                                </path>
                            </svg>
                            <span class="font-semibold">Order status</span>
                        </div>
                    </a>


                    <!-- Additional Links -->
                    <div class="bg-white rounded-lg border border-gray-200 mb-4">
                        <a href="#"
                            class="flex items-center justify-between border-b border-gray-200 py-3 px-4 bg-white hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                    <path
                                        d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm3 7h-2v2h-2v-2H9v-2h2V9h2v2h2v2z">
                                    </path>
                                </svg>
                                <span class="font-semibold">My Nintendo</span>
                            </div>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>

                        <a href="#"
                            class="flex items-center justify-between py-3 px-4 bg-white border-b border-gray-200 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z">
                                    </path>
                                </svg>
                                <span class="font-semibold">Redeem code</span>
                            </div>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>

                        <a href="#"
                            class="flex items-center justify-between py-3 px-4 bg-white hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                    </path>
                                </svg>
                                <span class="font-semibold">Account settings</span>
                            </div>
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                    @auth
                        <div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="flex items-center justify-center text-white bg-blue-700 text-center py-3 rounded-lg mt-3 font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                Sign out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    @endauth
                </div>
                <a href="{{ url('/panel') }}"
                    class="flex items-center justify-center text-white bg-blue-700 text-center py-3 rounded-lg mt-3 font-semibold">
                    Panel
                </a>

            </div>

            <!-- menu -->
            <div
                class="mobile-tabs-panel fixed hidden inset-x-0 bottom-12 mx-auto sm:w-[90%] pb-12 max-w-[450px] bg-[#F3F4F6] rounded-lg shadow-xl overflow-y-auto max-h-[80vh]">
                <!-- Header -->
                <div class="bg-nintendo-red p-4 rounded-t-lg flex items-center justify-between relative">
                    <div class="mx-auto">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Nintendo.svg" alt="Nintendo"
                            class="h-10">
                    </div>
                    <button class="text-white close-mobile-tabs-panel bg-white rounded-full p-[1px] absolute right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                            fill="#E60012">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Tabs -->
                <div class="grid grid-cols-3 mt-3">
                    <div class="flex not-active-mobile-tab flex-col items-center justify-center py-3">
                        <svg class="w-6 h-6 text-nintendo-red mb-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                            </path>
                            <path
                                d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm3 7h-2v2h-2v-2H9v-2h2V9h2v2h2v2z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium">Explore</span>
                    </div>
                    <div class="flex active-mobile-tab flex-col items-center justify-center py-3 bg-gray-100">
                        <svg class="w-6 h-6 text-nintendo-red mb-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 6h-2c0-2.76-2.24-5-5-5S7 3.24 7 6H5c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-7-3c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm7 17H5V8h14v12z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium text-nintendo-red">Shop</span>
                    </div>
                    <div class="flex not-active-mobile-tab flex-col items-center justify-center py-3">
                        <svg class="w-6 h-6 text-nintendo-red mb-1" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
                            </path>
                        </svg>
                        <span class="text-sm font-medium">Support</span>
                    </div>
                </div>

                <div class="bg-[#F3F4F6] pb-8 pt-5" id="mobile-shop-tab">
                    <!-- My Nintendo Store -->
                    <a href="#" class="block bg-nintendo-red text-white p-4 my-3 mx-4 rounded-lg">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-7h8v7zm3-9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V1z">
                                </path>
                            </svg>
                            <span class="font-bold">My Nintendo Store</span>
                        </div>
                    </a>

                    <!-- Menu Items -->
                    <div class="px-4 pb-[140px] space-y-1">
                        <!-- Games -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M21 6H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H3V8h18v8zM6 15h2v-2h2v-2H8V9H6v2H4v2h2z">
                                    </path>
                                    <circle cx="14.5" cy="13.5" r="1.5"></circle>
                                    <circle cx="18.5" cy="10.5" r="1.5"></circle>
                                </svg>
                                <span class="font-medium">Games</span>
                            </div>
                        </a>

                        <!-- Hardware -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM9 10h2v2h2v-2h2V8h-2V6h-2v2H9v2z">
                                    </path>
                                </svg>
                                <span class="font-medium">Hardware</span>
                            </div>
                        </a>

                        <!-- Merchandise -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16 6V4c0-1.1-.9-2-2-2h-4c-1.1 0-2 .9-2 2v2H4v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V6h-4zm-6-2h4v2h-4V4z">
                                    </path>
                                </svg>
                                <span class="font-medium">Merchandise</span>
                            </div>
                        </a>

                        <!-- Sales and Deals -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58s1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41s-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z">
                                    </path>
                                </svg>
                                <span class="font-medium">Sales and Deals</span>
                            </div>
                        </a>

                        <!-- Exclusives -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                                <span class="font-medium">Exclusives</span>
                            </div>
                        </a>

                        <!-- Characters -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                    </path>
                                </svg>
                                <span class="font-medium">Characters</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="bg-[#F3F4F6] pb-8 pt-5 hidden" id="mobile-support-tab">
                    <!-- Support Home -->
                    <a href="#" class="block bg-nintendo-red text-white p-4 my-3 mx-4 rounded-lg">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z">
                                </path>
                            </svg>
                            <span class="font-bold">Support Home</span>
                        </div>
                    </a>

                    <!-- Menu Items -->
                    <div class="px-4 pb-[202px] space-y-1">
                        <!-- My Support Dashboard -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z">
                                    </path>
                                </svg>
                                <span class="font-medium">My Support Dashboard</span>
                            </div>
                        </a>

                        <!-- Nintendo Switch Family -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" viewBox="0 0 24 24">
                                    <rect width="20" height="10" x="2" y="7" rx="2"
                                        fill="currentColor" />
                                </svg>
                                <span class="font-medium">Nintendo Switch Family</span>
                            </div>
                        </a>

                        <!-- Other systems -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z">
                                    </path>
                                    <path d="M6 15h2v-2h2v-2H8V9H6v2H4v2h2z"></path>
                                </svg>
                                <span class="font-medium">Other systems</span>
                            </div>
                        </a>

                        <!-- Accounts and My Nintendo -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                    </path>
                                </svg>
                                <span class="font-medium">Accounts and My Nintendo</span>
                            </div>
                        </a>

                        <!-- Repair -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z">
                                    </path>
                                </svg>
                                <span class="font-medium">Repair</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="bg-[#F3F4F6] pb-12 pt-5 hidden" id="mobile-explore-tab">
                    <!-- Home -->
                    <a href="#" class="block bg-nintendo-red text-white p-4 my-3 mx-4 rounded-lg">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                            </svg>
                            <span class="font-bold">Home</span>
                        </div>
                    </a>

                    <!-- Menu Items -->
                    <div class="px-4 space-y-1">
                        <!-- Nintendo Switch 2 -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <div
                                    class="w-6 h-6 bg-nintendo-red flex items-center justify-center text-white mr-3 text-xs font-bold">
                                    32
                                </div>
                                <span class="font-medium">Nintendo Switch 2</span>
                            </div>
                        </a>

                        <!-- Nintendo Switch -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" viewBox="0 0 24 24">
                                    <rect width="20" height="10" x="2" y="7" rx="2"
                                        fill="currentColor" />
                                </svg>
                                <span class="font-medium">Nintendo Switch</span>
                            </div>
                        </a>

                        <!-- Games -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M21 6H3c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm0 10H3V8h18v8zM6 15h2v-2h2v-2H8V9H6v2H4v2h2z">
                                    </path>
                                    <circle cx="14.5" cy="13.5" r="1.5"></circle>
                                    <circle cx="18.5" cy="10.5" r="1.5"></circle>
                                </svg>
                                <span class="font-medium">Games</span>
                            </div>
                        </a>

                        <!-- Nintendo Switch Online -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" viewBox="0 0 24 24">
                                    <rect width="20" height="10" x="2" y="7" rx="2"
                                        fill="currentColor" />
                                </svg>
                                <span class="font-medium">Nintendo Switch Online</span>
                            </div>
                        </a>

                        <!-- News and Events -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z">
                                    </path>
                                </svg>
                                <span class="font-medium">News and Events</span>
                            </div>
                        </a>

                        <!-- Play Nintendo -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z">
                                    </path>
                                </svg>
                                <span class="font-medium">Play Nintendo</span>
                            </div>
                        </a>

                        <!-- My Nintendo -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                    </path>
                                    <path
                                        d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm3 7h-2v2h-2v-2H9v-2h2V9h2v2h2v2z">
                                    </path>
                                </svg>
                                <span class="font-medium">My Nintendo</span>
                            </div>
                        </a>

                        <!-- Apps -->
                        <a href="#"
                            class="block bg-white border border-gray-200 rounded-lg p-4 hover:bg-gray-50">
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-nintendo-red mr-3" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z">
                                    </path>
                                </svg>
                                <span class="font-medium">Apps</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</nav>


<!-- Mobile Search Panel -->
<div id="mobile-search-panel"
    class="mobile-search-panel fixed hidden inset-x-0 top-0 h-full w-full bg-white z-[1000] overflow-y-auto">
    <div class="flex items-center justify-between gap-2 pb-1 px-4 md:pr-12 pt-4">
        <div class="flex-grow">
            <div class="relative flex items-center w-full">
                <div class="input-icon py-[9px]">
                    <svg data-name="Magnifying glass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        class="sc-1r59ztq-1 OMXJg" width="18" role="presentation" alt=""
                        size="18" color="#E60012">
                        <path
                            d="M31.564 28.745l-8.73-8.73a12.66 12.66 0 1 0-2.804 2.834l8.715 8.715a1.5 1.5 0 0 0 2.114 0l.705-.705a1.5 1.5 0 0 0 0-2.114zm-18.966-7.433A8.611 8.611 0 1 1 21.21 12.7a8.62 8.62 0 0 1-8.612 8.612z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <input type="text" placeholder="Search games, hardware, news, etc"
                    class="w-full py-2 pl-2 pr-10 border-b-[1px] text-sm  search-dropdown-input" autofocus>
            </div>
        </div>
        <button id="close-search-panel" class="close-mobile-search-panel p-1 rounded-full bg-gray-600 x-5">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="#fff" viewBox="0 0 24 24"
                stroke="#fff">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Search content -->
    <div class="px-4 md:px-[50px] py-2 flex flex-wrap">
        <!-- Trending Topics -->
        <div class="mb-10 w-1/3">
            <h3 class="text-2xl font-[600] mb-4">Trending Topics</h3>
            <div class="flex align-center justify-between flex-col gap-3">
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Nintendo Switch 2</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Nintendo Swtich 2 games</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">How to buy Nintendo Switch 2</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Online services</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Games</a>
                <a href="#" class="text-md font-[600] text-nintendo-red mb-1">Games on sale</a>
            </div>
        </div>

        <!-- Top Store Products -->
        <div class="w-full md:max-w-[800px]">
            <h3 class="text-2xl font-[600] mb-4">Top Store Products</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 flex-wrap">
                <!-- Xenoblade Chronicles X: Definitive Edition Card -->
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt=""
                                        data-testid="heartspark" color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt=""
                                        data-testid="heartspark" color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Xenoblade Chronicles X: Definitive Edition Card -->
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt=""
                                        data-testid="heartspark" color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-white mb-3 rounded-lg shadow-sm border border-gray-200 flex items-center p-3 hover:shadow-md transition-shadow">
                    <img src="{{ asset('assets/images/top-product-1.avif') }}" alt="Xenoblade Chronicles X"
                        class="h-[90px] w-[90px] rounded-lg object-cover mr-3">
                    <div class="flex flex-col flex-grow justify-between">
                        <h3 class="text-sm font-semibold text-gray-800 leading-tight">Xenoblade Chronicles™ X:
                            Definitive Edition</h3>
                        <div class="flex items-center justify-between mt-1">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="12"
                                    height="12" role="presentation" class="mr-1 text-gray-600">
                                    <path
                                        d="M30.1 10.4h-8.5V1.9c0-1-.8-1.9-1.9-1.9h-7.5c-1 0-1.9.8-1.9 1.9v8.5H1.9c-1 0-1.9.8-1.9 1.9v7.5c0 1 .8 1.9 1.9 1.9h8.5v8.5c0 1 .8 1.9 1.9 1.9h7.5c1 0 1.9-.8 1.9-1.9v-8.5h8.5c1 0 1.9-.8 1.9-1.9v-7.5c-.1-1.1-.9-1.9-2-1.9zM7.5 16.9H3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.5.9-1 .9zm9.4 11.3c0 .5-.4.9-.9.9s-.9-.4-.9-.9v-3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.8zm0-20.7c0 .5-.4.9-.9.9s-.9-.4-.9-.9V3.8c0-.5.4-.9.9-.9s.9.4.9.9v3.7zm11.3 9.4h-3.8c-.5 0-.9-.4-.9-.9s.4-.9.9-.9h3.8c.5 0 .9.4.9.9s-.4.9-.9.9z"
                                        fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path>
                                </svg>
                                <span class="text-xs text-gray-600">Games</span>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-600 ml-2 mt-5">
                                    <svg viewBox="0 0 54 54" fill="currentColor" stroke="currentColor"
                                        width="40" role="presentation" alt=""
                                        data-testid="heartspark" color="#E60012" size="24">
                                        <g class="hearts">
                                            <path class="heart heart-outline"
                                                d="M27 38.9c-.4 0-.6-.1-.8-.4L16.7 29c-1.8-1.8-2.7-3.8-2.7-6 0-4.4 3.5-8 7.9-8 1.9 0 3.7.8 5.1 2.3 1.4-1.4 3.2-2.3 5.1-2.3 4.4 0 7.9 3.6 7.9 8 0 2.6-1.5 4.6-2.7 6.1l-9.5 9.4c-.2.3-.6.4-.8.4zm-5.1-21.4c-3.1 0-5.6 2.5-5.6 5.6 0 1.9 1.1 3.3 2 4.3l8.6 8.7 8.5-8.6c1.4-1.5 2.1-3 2.1-4.4 0-3.1-2.5-5.6-5.6-5.6-1.5 0-3 1-4.1 2.5-.5.6-1.4.6-1.9 0-1-1.6-2.4-2.5-4-2.5z">
                                            </path>
                                        </g>
                                        <g class="sparks hidden">
                                            <path class="spark" d="M27 8V0M27 46v8" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.171 12.828l5.657-5.657M12.829 12.828L7.171 7.172"
                                                stroke-width="1.99998"></path>
                                            <path class="spark" d="M46 27h8M8 27H0" stroke-width="2"></path>
                                            <path class="spark"
                                                d="M41.172 41.172l5.657 5.656M12.829 41.171l-5.657 5.657"
                                                stroke-width="1.99998"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

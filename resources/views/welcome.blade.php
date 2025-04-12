<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nintendo Portal</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }

        .nintendo-red {
            background-color: #e60012;
        }

        .border-nintendo-red {
            border-color: #e60012;
        }

        .text-nintendo-red {
            color: #e60012;
        }
    </style>
</head>

<body
    class="font-poppins bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="text-center p-8 max-w-md w-full">
        <!-- Nintendo Logo -->
        <div class="mb-12 animate-pulse-slow origin-center">
            <h1
                class="text-nintendo-red text-5xl md:text-6xl font-extrabold uppercase tracking-tighter inline-block relative">
                Nintendo
                <span class="absolute bottom-0 left-0 w-full h-1 bg-red-600 rounded"></span>
            </h1>
        </div>

        <!-- Buttons -->
        <div class="flex justify-center items-center gap-4 mt-8">
            @auth
                <a href="{{ route('products.index') }}"
                    class="nintendo-red text-white font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-red-500/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path
                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                        </path>
                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                        <line x1="12" y1="22" x2="12" y2="12"></line>
                    </svg>
                    Products
                </a>

                @if (auth()->user()->hasRole('super_admin'))
                    <a href="{{ url('/panel') }}"
                        class="bg-white border-2 border-nintendo-red text-nintendo-red font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-red-500/30 hover:bg-red-50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        Panel
                    </a>
                @endif
            @else
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('login') }}"
                        class="w-full sm:w-auto nintendo-red text-white font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-red-500/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        Login
                    </a>
                    <a href="{{ route('register') }}"
                        class="w-full sm:w-auto bg-white border-2 border-nintendo-red text-nintendo-red font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-red-500/30 hover:bg-red-50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                        </svg>
                        Register
                    </a>
                    <a href="{{ route('products.index') }}"
                        class="nintendo-red text-white font-bold py-3 px-8 rounded-full shadow-lg hover:shadow-red-500/50 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 active:translate-y-1 active:shadow-none flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                            </path>
                            <polyline points="3.29 7 12 12 20.71 7"></polyline>
                            <line x1="12" y1="22" x2="12" y2="12"></line>
                        </svg>
                        Products
                    </a>
                </div>
            @endauth
        </div>
    </div>
</body>

<script src="{{ asset('assets/js/app.js') }}" type="module"></script>

</script>

</html>

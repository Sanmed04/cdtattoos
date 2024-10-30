<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<style>
    html {
        overflow-y: scroll;
        scrollbar-width: none;
    }

    html::-webkit-scrollbar {
        display: none;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sin titulo')</title>
    <link rel="icon" type="image/x-icon" href="">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Pirata+One&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen bg-[#141618] text-white">

    <!-- Header Mobile -->
    <header class="bg-[#141618] h-full max-h-48 md:hidden">
        <div class="text-center mx-8 flex items-center justify-center h-36 my-4">
            <img class="h-full" src="{{ asset('images/cristian.jpg') }}" alt="">
        </div>
        <div class="flex flex-col space-y-4 mx-2 text-white text-2xl">
            <div class="text-center">
                Galeria
            </div>

            <div class="text-center">
                Sobre mi
            </div>
            <div class="text-center">
                Contacto
            </div>
            <div class="text-center">
                Contacto
            </div>
            <div class="text-center">
                Contacto
            </div>

        </div>
    </header>

    <!-- Header Desktop -->

    <header class="h-full max-h-40 hidden md:block">

        <div class="flex space-x-4 mx-2 text-white text-2xl">
            <div class="flex space-x-16 items-center w-full justify-center text-5xl">
                <a href="{{ route('index.index') }}" class="text-center">
                    Galeria
                </a>

                <a href="{{ route('index.index') }}" class="text-center">
                    Sobre mi
                </a>
                <a href="{{ route('index.index') }}" class="text-center mx-8 flex items-center justify-center h-36 my-4">
                    <img class="h-full aspect-square" src="{{ asset('images/cristian.jpg') }}" alt="">
                </a>
                <a href="{{ route('index.index') }}" class="text-center">
                    Contacto
                </a>
                <a href="{{ route('index.index') }}" class="text-center">
                    Oriental
                </a>
            </div>
        </div>
    </header>
    <main class="mb-20">
        <div class="">
            @yield('content')
        </div>
        <!-- Whatsapp button -->
        <a href="https://wa.me/5491159904374"
            class="fixed bottom-6 right-4 md:bottom-8 md:right-8  z-40 p-2 rounded-full" target="_blank">
            <svg viewBox="0 0 256 259" xmlns="http://www.w3.org/2000/svg"
                class="hover:brightness-75 brightness-90 md:w-[64px] md:h-[64px] w-[48px] h-[48px] "
                preserveAspectRatio="xMidYMid">
                <path
                    d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                    fill="#00E676" />
                <path
                    d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                    fill="#FFF" />
            </svg>
        </a>
    </main>
    <footer class="mt-auto bg-[#141618] h-20 ">
        <div class="container h-full mx-auto flex justify-center items-center">
            <p class="text-white italic">Todos los derechos reservados</p>
        </div>
    </footer>
</body>

</html>

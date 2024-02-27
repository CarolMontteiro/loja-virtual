<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" media="screen">
    <script src="https://kit.fontawesome.com/8005c041ac.js" crossorigin="anonymous"></script>
    <title>Loja Virtual</title>
</head>
<body class="bg-neutral-800">
<header id="Header-nav">
    <div class="container">
        <div class="header-nav flex justify-between items-center py-5 bg-pink-600">
            <div>
                <a href="#"
                   id="btn-menu"
                   class="btn-mobile text-white md:hidden">
                    <i class="fa-solid fa-bars text-2xl px-5"></i>
                </a>
                <a href="#" class="pl-5">LOGOMARCA</a>
            </div>

            <div class="search-box hidden bg-white h-8 p-2.5 rounded-xl md:flex md:justify-center md:items-center">
                <input type="text"
                       name=""
                       class="search-text bg-neutral-800 border-0 bg-transparent outline-0 p-0 leading-[7px] md:w-60 lg:w-80"
                       placeholder="O que você procura?">

                <a href="#" class="search-bnt flex justify-center items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>

            <div class="btn-right">
                <div class="flex items-center">
                    <a href="#" class="w-11 hidden md:block">
                        <i class="fa-solid fa-user text-xl text-white"></i>
                    </a>

                    <a href="#" class="relative w-11">
                        <i class="fa-solid fa-heart text-xl text-white"></i>
                        <span class="absolute -top-4 left-4 text-xs bg-blue-600 text-white rounded px-1">0</span>
                    </a>

                    <a href="#" class="relative w-11">
                        <i class="fa-solid fa-cart-shopping text-xl text-white"></i>
                        <span class="absolute -top-4 left-6 text-xs bg-blue-600 text-white rounded px-1">0</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-amber-100 h-10 flex items-center justify-center">
            <div class="search-box bg-neutral-300 h-7 p-2.5 rounded-xl flex justify-center items-center md:hidden">
                <input type="text"
                       name=""
                       class="search-text w-full bg-neutral-800 border-0 bg-transparent outline-0 p-0 leading-[7px]"
                       placeholder="O que você procura?">

                <a href="#" class="search-bnt flex justify-center items-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
            </div>

            <nav class="hidden md:block">
                <ul class="flex gap-2 relative">
                    <li><a href="#" class="py-[11px] px-5 lg:px-7 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                    <li><a href="#" class="py-[11px] px-5 lg:px-7 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                    <li><a href="#" class="py-[11px] px-5 lg:px-7 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                    <li><a href="#" class="py-[11px] px-5 lg:px-7 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                    <li><a href="#" class="py-[11px] px-5 lg:px-7 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                </ul>
            </nav>

            <div id="menu-mobile" class="menu-mobile bg-zinc-300 h-screen w-[0%] overflow-hidden fixed top-0 left-0 z-[9999] duration-300">
                <div class="btn-close bg-pink-600 text-right">
                    <i class="fa-solid fa-xmark text-white text-2xl pt-3 px-3"></i>
                </div>

                <div class="bg-pink-600 py-3">
                    <a href="#" class="enter-user w-11 text-white font-semibold">
                        <i class="fa-solid fa-user text-xl pl-3 pr-2"></i>
                        Entre ou Cadastre-se
                    </a>
                </div>

                <nav class="pt-3">
                    <ul class="block">
                        <li><a href="#" class="w-full block py-1.5 pl-3 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 pl-3 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 pl-3 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 pl-3 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 pl-3 hover:text-white hover:bg-pink-600">Lorem ipsum</a></li>
                    </ul>
                </nav>
            </div>

            <div id="overlay-menu" class="overlay-menu hidden bg-black/50 w-full h-full fixed top-0 right-0 z-[8888]"></div>
        </div>
    </div>
</header>

<script src="{{asset('js/menu-mobile.js')}}" defer></script>
</body>
</html>

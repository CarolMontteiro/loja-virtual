<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick/slick-theme.css') }}"/>
    <script src="https://kit.fontawesome.com/8005c041ac.js" crossorigin="anonymous"></script>
    <title>Loja Virtual</title>
</head>
<body class=" ">
<header id="Header-nav" class="bg-[#C36BE5]">
    <div class="container">
        <div class="header-nav flex justify-between items-center py-5">
            <div>
                <a href="#"
                   id="btn-menu"
                   class="btn-mobile md:hidden">
                    <i class="fa-solid text-white fa-bars text-2xl px-5"></i>
                </a>
                <a href="#" class="md:pl-5 font-semibold">LOGOMARCA</a>
            </div>

            <div class="search-box hidden bg-zinc-100 h-8 p-2.5 rounded-xl md:flex md:justify-center md:items-center">
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
                        <i class="fa-solid fa-user text-xl text-white xl:text-2xl"></i>
                    </a>

                    <a href="#" class="relative w-11">
                        <i class="fa-solid fa-heart text-xl text-white xl:text-2xl"></i>
                        <span class="hidden absolute -top-4 left-4 text-xs bg-blue-800 text-white rounded px-1">0</span>
                    </a>

                    <a href="#" class="relative w-11 mr-3">
                        <i class="fa-solid fa-cart-shopping text-xl text-white xl:text-2xl"></i>
                        <span class="hidden absolute -top-4 left-6 text-xs bg-blue-800 text-white rounded px-1">0</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="h-10 flex items-center justify-center">
            <div class="search-box bg-zinc-100 h-7 p-2.5 mb-5 rounded-xl flex justify-center items-center md:hidden">
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
                    <li><a href="#" class="text-white px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:text-yellow-300">Categorias</a></li>
                    <li><a href="#" class="text-white px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:text-yellow-300">Mais vendido</a></li>
                    <li><a href="#" class="text-white px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:text-yellow-300">Novidades na loja</a></li>
                    <li><a href="#" class="text-white px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:text-yellow-300">Produtos em alta</a></li>
                    <li><a href="#" class="text-white px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:text-yellow-300">Oferta do dia</a></li>
                </ul>
            </nav>

            <div id="menu-mobile" class="menu-mobile bg-zinc-100 h-screen w-0 overflow-hidden fixed top-0 left-0 z-[9999] duration-300">
                <div class="hidden btn-close bg-[#C36BE5] text-right">
                    <i class="fa-solid fa-xmark text-white text-2xl pt-3 px-3"></i>
                </div>

                <div class="bg-[#C36BE5] py-3">
                    <a href="#" class="enter-user w-11 text-white font-semibold">
                        <i class="fa-solid fa-user text-xl pl-3 pr-2"></i>
                        Entre ou Cadastre-se
                    </a>
                </div>

                <nav class="pt-3">
                    <ul class="block">
                        <li>
                            <div class="text-sm text-[#034AAD] font-semibold uppercase p-3">Destaques</div>
                        </li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Mais vendido</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Novidades na loja</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Produtos em alta</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Oferta do dia</a></li>
                        <li>
                            <div class="text-sm text-[#034AAD] font-semibold uppercase p-3">Compras por categoria</div>
                        </li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Lorem ipsum</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Lorem ipsum</a></li>
                        <li>
                            <div class="text-sm text-[#034AAD] font-semibold uppercase p-3">Ajuda e configurações</div>
                        </li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Sua conta</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Ajuda</a></li>
                        <li><a href="#" class="w-full block py-1.5 px-3 hover:text-white hover:bg-indigo-400">Faça seu login</a></li>
                    </ul>
                </nav>
            </div>

            <div id="overlay-menu" class="overlay-menu hidden bg-black/50 w-full h-full fixed top-0 right-0 z-[8888]"></div>
        </div>
    </div>
</header>

<main class="bg-zinc-100">
    @yield('content')
</main>

<footer class="bg-white ">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center">
{{--                    <img src="" class="h-8 me-3" alt=""/>--}}
                    <span class="self-center text-2xl font-semibold whitespace-nowrap">LOGOMARCA</span>
                </a>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Sobre LOGOMARCA</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Sobre nós</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Trabalhe conosco</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Fornecedores</a>
                        </li>
                         <li class="mb-4">
                            <a href="#" class="hover:underline">Venda conosco</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Atenção Clientes</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Soluções</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Como comprar</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Benefícios</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Métodos de pagamentos</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Devoluções e Garantias</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Centro de ajuda</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Reclamações e Sugestões</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Vendas corporativaa</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Política de privacidade</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Termos &amp; Condições</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">LOGOMARCA</a>. Todos os direitos reservados.
          </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="#" class="text-gray-500 hover:text-gray-900">
                    <i class="fa-brands fa-facebook"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                    <i class="fa-brands fa-instagram"></i>
                    <span class="sr-only">instagram</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                    <i class="fa-brands fa-youtube"></i>
                    <span class="sr-only">YouTube</span>
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-900 ms-5">
                    <i class="fa-brands fa-tiktok"></i>
                    <span class="sr-only">TikTok</span>
                </a>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('js/menu-mobile.js')}}" defer></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/slick/slick.min.js') }}"></script>

<script src="{{ asset('js/slide-products.js') }}"></script>

<script src="{{ asset('js/carousel-slick.js') }}"></script>
</body>
</html>

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
<body>
<header id="Header-nav" class="bg-yellow-400">
    <div class="container">
        <div class="header-nav flex justify-between items-center py-6">
            <div>
                <a href="#"
                   id="btn-menu"
                   class="btn-mobile md:hidden">
                    <i class="fa-solid text-blue-800 fa-bars text-2xl px-5"></i>
                </a>
                <a href="{{route('home')}}" class="md:pl-5 font-semibold text-blue-800">LOGOMARCA</a>
            </div>

            <div class="search-box hidden bg-white h-8 p-2.5 rounded-xl md:flex md:justify-center md:items-center">
                <input type="text"
                       name=""
                       class="search-text bg-neutral-800 border-0 bg-transparent outline-0 p-0 leading-[7px] md:w-60 lg:w-80"
                       placeholder="O que você procura?">

                <a href="#" class="search-bnt flex justify-center items-center">
                    <i class="fa-solid fa-magnifying-glass text-blue-800"></i>
                </a>
            </div>

            <div class="btn-right">
                <div class="flex">
                    <a href="{{route('identification')}}" class="w-11 hidden md:block">
                        <i class="fa-solid fa-user text-xl text-blue-800 xl:text-xl"></i>
                    </a>

                    <a href="#" class="relative w-11">
                        <i class="fa-solid fa-heart text-xl text-blue-800 xl:text-xl"></i>
                        <span id="favorites-icon"
                              class="absolute top-[-13px] bg-white pt-[2px] px-[4px] text-xs text-blue-800 rounded-full">
                            0
                        </span>
                    </a>

                    <a href="#" class="relative w-11">
                        <i class="fa-solid fa-cart-shopping text-xl text-blue-800 xl:text-xl"></i>
                        <span id="cart-icon"
                              class="absolute top-[-13px] right-[5px] bg-white pt-[2px] px-[4px] text-xs text-blue-800 rounded-full">
                            0
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div class="h-14 flex items-center justify-center bg-white md:h-10">
            <div class="search-box bg-blue-800 h-7 py-5 px-2.5 rounded-xl flex justify-center items-center md:hidden">
                <input type="text"
                       name=""
                       class="search-text text-white w-full border-0 bg-transparent outline-0 leading-[7px]"
                       placeholder="O que você procura?">

                <a href="#" class="search-bnt flex justify-center items-center">
                    <i class="fa-solid fa-magnifying-glass text-yellow-400"></i>
                </a>
            </div>

            <nav class="hidden md:block">
                <ul class="flex gap-2 relative">
                    <li>
                        <a href="#"
                           class="text-blue-800 py-3 px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:bg-yellow-400">
                            Categorias
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-blue-800 py-3 px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:bg-yellow-400">
                            Mais vendido
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-blue-800 py-3 px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:bg-yellow-400">
                            Novidades na loja
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-blue-800 py-3 px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:bg-yellow-400">
                            Produtos em alta
                        </a>
                    </li>
                    <li>
                        <a href="#"
                           class="text-blue-800 py-3 px-5 md:text-sm lg:text-base lg:px-7 xl:text-lg hover:bg-yellow-400">
                            Oferta do dia
                        </a>
                    </li>
                </ul>
            </nav>

            <div id="menu-mobile"
                 class="menu-mobile bg-zinc-100 h-screen w-0 overflow-hidden fixed top-0 left-0 z-[9999] duration-300">
                <div class="hidden btn-close bg-[#C36BE5] text-right">
                    <i class="fa-solid fa-xmark text-white text-2xl pt-3 px-3"></i>
                </div>

                <div class="bg-blue-800 py-3">
                    <a href="{{route('identification')}}" class="enter-user w-11 text-white font-semibold">
                        <i class="fa-solid fa-user text-xl pl-3 pr-2"></i>
                        Entre ou Cadastre-se
                    </a>
                </div>

                <nav class="pt-3">
                    <ul class="block">
                        <li>
                            <div class="text-sm text-[#034AAD] font-semibold uppercase p-3">Destaques</div>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Mais vendido
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Novidades na loja
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Produtos em alta
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Oferta do dia
                            </a>
                        </li>
                        <li>
                            <div class="text-sm text-[#034AAD] font-semibold uppercase p-3">Compras por categoria</div>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Lorem ipsum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Lorem ipsum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Lorem ipsum
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Lorem ipsum
                            </a>
                        </li>
                        <li>
                            <div class="text-sm text-[#034AAD] font-semibold uppercase p-3">Ajuda e configurações</div>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Sua conta
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">Ajuda
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w-full block py-1.5 px-3 hover:text-blue-800 hover:bg-yellow-400">
                                Faça seu login
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div id="overlay-menu"
                 class="overlay-menu hidden bg-black/50 w-full h-full fixed top-0 right-0 z-[8888]">
            </div>
        </div>
    </div>
</section>

<main class="bg-zinc-100">
    @yield('content')
</main>

<footer>
    <div class="container">
        <div>
            <div class="grid grid-cols-1 mx-5 mt-10 gap-8 sm:mx-0 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <h2 class="text-blue-800 mb-6 text-base font-semibold uppercase">Atenção Clientes</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Soluções</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Como comprar</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Benefícios</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Métodos de pagamentos</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Devoluções e Garantias</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Centro de ajuda</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Reclamações e Sugestões</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Vendas corporativaa</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-blue-800 mb-6 text-base font-semibold uppercase">Sobre LOGOMARCA</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Sobre nós</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Trabalhe conosco</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Fornecedores</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Venda conosco</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-blue-800 mb-6 text-base font-semibold uppercase">Legal</h2>
                    <ul class="text-gray-500 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-yellow-400">Política de privacidade</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline hover:text-yellow-400">Termos &amp; Condições</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-blue-800 mb-6 text-base font-semibold uppercase">siga-nos</h2>
                    <div class="flex mt-4 sm:mt-0">
                        <a href="#" class="text-gray-500 hover:text-blue-800">
                            <i class="fa-brands fa-facebook text-xl"></i>
                            <span class="sr-only">Facebook</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-800 ms-5">
                            <i class="fa-brands fa-instagram text-xl"></i>
                            <span class="sr-only">instagram</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-800 ms-5">
                            <i class="fa-brands fa-youtube text-xl"></i>
                            <span class="sr-only">YouTube</span>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-blue-800 ms-5">
                            <i class="fa-brands fa-tiktok text-xl"></i>
                            <span class="sr-only">TikTok</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8"/>
        <div class="text-center">
            <div class="mb-2">
                <a href="#">
                    <span
                        class="text-blue-800 self-center text-2xl font-semibold whitespace-nowrap">LOGOMARCA
                    </span>
                </a>
            </div>
            <div class="mb-8">
                <span class="text-sm text-gray-500 sm:text-center">
                    © 2024 <a href="#" class="hover:underline">LOGOMARCA</a>. Todos os direitos reservados.
                </span>
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

<script src="{{ asset('js/category-product.js') }}"></script>

<script src="{{ asset('js/cart-and-favorites.js') }}"></script>

<script src="{{ asset('js/identification.js') }}"></script>
</body>
</html>

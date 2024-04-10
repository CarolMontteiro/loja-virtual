@extends('site.template')
@section('content')

<section id="carousel-slick" class="bg-[#034AAD]">
    <div class="container">
        <div class="single-item">
            <img src="{{ asset('image/2.png') }}" alt="...">
            <img src="{{ asset('image/3.png') }}" alt="...">
            <img src="{{ asset('image/1.png') }}" alt="...">
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="category-product py-5">
            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-2 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct1.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Eletrônicos</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-2 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct2.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Casa</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct3.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Alimentos e Bebidas</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct4.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Moda</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct5.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Ferramentas e Construções</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct6.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Cuidados Pessoais</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct7.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Games e Console</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct8.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Papelaria e Escritório</h3>
            </a>

            <a href="#" class="text-center mt-5 group hover:transform hover:scale-110">
                <div class="w-[75px] h-[75px] sm:w-20 sm:h-20 xl:w-[90px] xl:h-[90px] p-4 mx-auto bg-blue-800 border-4 border-yellow-600 rounded-full">
                    <img class="w-full" src="{{ asset('image/ct9.png') }}" alt="">
                </div>
                <h3 class="mt-2 text-zinc-500 text-sm font-semibold group-hover:text-blue-800">Casa Inteligente</h3>
            </a>
        </div>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <h2 class="text-blue-800 text-xl text-center font-semibold uppercase sm:mt-5 pb-10">Oferta do dia</h2>

        <div class="multiple-items flex">
            @for ($i = 0; $i < 8; $i++)
                <div class="card bg-white p-2 mx-6 cursor-pointer hover:shadow sm:mx-2 group">
                    <div class="add-to-favorites-btn like w-full flex justify-end mb-1.5 cursor-pointer">
                        <i class="fa-solid fa-heart text-zinc-300 text-2xl hover:text-red-600"></i>
                    </div>
                    <div class="image group-hover:transform group-hover:scale-95">
                        <img class="w-full bg-cover" src="{{ asset('image/slide1.jpg') }}" alt="">
                    </div>
                    <div class="description text-center">
                        <h4 class="text-zinc-600 text-md font-light my-2" title="">iPad Mini 3 Apple 64GB Cinza Chumbo Tela 7,9” - Retina Wi-Fi Processador M7 Câmera 5MP + Frontal - iPad Mini</h4>

                        <div class="flex justify-center">
                            <div class="rating text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <span class="text-sm text-zinc-500">(2000)</span>
                        </div>


                        <div class="price mt-1 mb-2">
                            <h5 class="line-through font-light text-zinc-500 text-sm">R$ 3.999,99</h5>
                            <h5 class="font-semibold text-zinc-500 text-lg mb-1.5">R$ 3.799,99</h5>
                        </div>
                    </div>
                    <div class="cart text-center">
                        <button class="add-to-cart-btn font-semibold rounded-lg py-1.5 px-6 border border-blue-800 text-blue-800 transition hover:transform hover:scale-110 group-hover:bg-blue-800 group-hover:text-white">
                            Adicionar
                            <i class="fa-solid fa-cart-shopping text-lg ml-2 group-hover:text-yellow-400"></i>
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section id="box-page">
    <div class="container">
        <div class="m-6 md:my-16 sm:mx-0 sm:flex sm:gap-4 md:gap-10">
            <a href="#" class="m-6 sm:m-0 lg:grid lg:grid-cols-12 group transition transform hover:scale-110">
                <div class="h-64 bg-cover text-center overflow-hidden sm:h-48 md:w-[330px] lg:col-span-5 lg:h-60 lg:w-60"
                     style="background-image: url('{{ asset('image/casa.jpg') }}')" title="">
                </div>
                <div class="flex p-5 bg-white lg:justify-center lg:items-center lg:col-span-7">
                    <div class="sm:w-60 md:w-[291px]">
                        <div class="text-gray-900 font-normal text-2xl mb-2 lg:text-3xl lg:w-60">Sua casa de cara nova</div>
                        <div class="bg-blue-800 w-24 text-center font-semibold text-white py-2 rounded text-base group-hover:bg-yellow-400 group-hover:text-blue-800">
                            Ver mais
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" class="lg:grid lg:grid-cols-12 group transition transform hover:scale-110">
                <div class="h-64 bg-cover text-center overflow-hidden sm:h-48 md:w-[330px] lg:col-span-5 lg:h-60 lg:w-60"
                     style="background-image: url('{{ asset('image/feshion.jpg') }}')" title="">
                </div>
                <div class="flex p-5 bg-white lg:justify-center lg:items-center lg:col-span-7">
                    <div class="sm:w-60 md:w-[291px]">
                        <div class="text-gray-900 font-normal text-2xl mb-2 lg:text-3xl lg:w-60">O melhor da moda</div>
                        <div class="bg-blue-800 w-24 text-center font-semibold text-white py-2 rounded text-base group-hover:bg-yellow-400 group-hover:text-blue-800">
                            Ver mais
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section id="best-sellers">
    <div class="container">
        <h2 class="text-blue-800 text-xl text-center font-semibold uppercase mt-10 pb-10">Mais vendidos</h2>

        <div class="multiple-items flex">
            @for ($i = 0; $i < 8; $i++)
                <div class="card bg-white p-2 mx-6 cursor-pointer hover:shadow sm:mx-2 group">
                    <div class="add-to-favorites-btn like w-full flex justify-end mb-1.5 cursor-pointer">
                        <i class="fa-solid fa-heart text-zinc-300 text-2xl hover:text-red-600"></i>
                    </div>
                    <div class="image group-hover:transform group-hover:scale-95">
                        <img class="w-full bg-cover" src="{{ asset('image/slide1.jpg') }}" alt="">
                    </div>
                    <div class="description text-center">
                        <h4 class="text-zinc-600 text-md font-light my-2" title="">iPad Mini 3 Apple 64GB Cinza Chumbo Tela 7,9” - Retina Wi-Fi Processador M7 Câmera 5MP + Frontal - iPad Mini</h4>

                        <div class="flex justify-center">
                            <div class="rating text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <span class="text-sm text-zinc-500">(2000)</span>
                        </div>


                        <div class="price mt-1 mb-2">
                            <h5 class="line-through font-light text-zinc-500 text-sm">R$ 3.999,99</h5>
                            <h5 class="font-semibold text-zinc-500 text-lg mb-1.5">R$ 3.799,99</h5>
                        </div>
                    </div>
                    <div class="cart text-center">
                        <button class="add-to-cart-btn font-semibold rounded-lg py-1.5 px-6 border border-blue-800 text-blue-800 transition hover:transform hover:scale-110 group-hover:bg-blue-800 group-hover:text-white">
                            Adicionar
                            <i class="fa-solid fa-cart-shopping text-lg ml-2 group-hover:text-yellow-400"></i>
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section id="best-sellers">
    <div class="container">
        <h2 class="text-blue-800 text-xl text-center font-semibold uppercase mt-10 pb-10">Novidades</h2>

        <div class="multiple-items flex">
            @for ($i = 0; $i < 8; $i++)
                <div class="card bg-white p-2 mx-6 cursor-pointer hover:shadow sm:mx-2 group">
                    <div class="add-to-favorites-btn like w-full flex justify-end mb-1.5 cursor-pointer">
                        <i class="fa-solid fa-heart text-zinc-300 text-2xl hover:text-red-600"></i>
                    </div>
                    <div class="image group-hover:transform group-hover:scale-95">
                        <img class="w-full bg-cover" src="{{ asset('image/slide1.jpg') }}" alt="">
                    </div>
                    <div class="description text-center">
                        <h4 class="text-zinc-600 text-md font-light my-2" title="">iPad Mini 3 Apple 64GB Cinza Chumbo Tela 7,9” - Retina Wi-Fi Processador M7 Câmera 5MP + Frontal - iPad Mini</h4>

                        <div class="flex justify-center">
                            <div class="rating text-yellow-500 text-sm">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <span class="text-sm text-zinc-500">(2000)</span>
                        </div>


                        <div class="price mt-1 mb-2">
                            <h5 class="line-through font-light text-zinc-500 text-sm">R$ 3.999,99</h5>
                            <h5 class="font-semibold text-zinc-500 text-lg mb-1.5">R$ 3.799,99</h5>
                        </div>
                    </div>
                    <div class="cart text-center">
                        <button class="add-to-cart-btn font-semibold rounded-lg py-1.5 px-6 border border-blue-800 text-blue-800 transition hover:transform hover:scale-110 group-hover:bg-blue-800 group-hover:text-white">
                            Adicionar
                            <i class="fa-solid fa-cart-shopping text-lg ml-2 group-hover:text-yellow-400"></i>
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section id="card-information">
    <div class="container">
        <div class="text-center text-gray-500 mt-10 sm:grid sm:grid-cols-3 sm:gap-3 md:gap-5">
            <div class="bg-white text-lg m-5 py-10 shadow rounded-2xl sm:m-0 sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3">
                    <img class="h-14 w-14 sm:h-10 sm:w-10 lg:h-14 lg:w-14" src="{{ asset('image/seguro.png') }}" alt="...">
                    <h2 class="pt-5">Compra fácil e segura</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="bg-white text-lg m-5 py-10 shadow rounded-2xl sm:m-0 sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3">
                    <img class="h-14 w-14 sm:h-10 sm:w-10 lg:h-14 lg:w-14" src="{{ asset('image/pagamento.png') }}" alt="...">
                    <h2 class="pt-5">Pague como quiser</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="bg-white text-lg m-5 py-10 shadow rounded-2xl sm:m-0 sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3 md:px-5">
                    <img class="h-14 w-14 sm:h-11 sm:w-11 lg:h-14 lg:w-14" src="{{ asset('image/entrega.png') }}" alt="...">
                    <h2 class="pt-5">Frete grátis a partir de R$ 79</h2>
                    <p class=""></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-800 py-10 sm:py-16 sm:mt-10">
    <div class="container">
        <div class="px-5 lg:flex justify-between items-center">
            <div>
                <div class="text-white pb-3 text-2xl sm:pb-6 sm:text-3xl lg:pb-5 lg:text-3xl">
                    <h2>Receba ofertas e benefícios por e-mail</h2>
                </div>

                <div class="border-0 pb-6 lg:pb-0">
                    <input type="email" placeholder="Digite seu e-mail" class="bg-neutral-100 border border-neutral-200 rounded-lg px-6 py-1.5 mb-1 text-base hover:border-yellow-600 cursor-pointer outline-yellow-400 transition sm:mb-0 lg:">
                    <button class="cursor-pointer font-semibold text-white border border-yellow-600 rounded-lg px-4 py-1.5 hover:bg-yellow-400 hover:text-blue-800">
                        Receber
                    </button>
                </div>
            </div>

            <div class="text-white text-xl sm:text-2xl lg:text-xl lg:w-72 xl:text-2xl">
                <h3 class="">Atendimento</h3>
                <a href="#" class="text-yellow-400">0800 111 0102</a>
                <p class="text-base">Horário de atendimento telefônico 7h00 às 21h00</p>
            </div>
        </div>
    </div>
</section>
@endsection


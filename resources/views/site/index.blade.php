@extends('site.template')
@section('content')

<section id="carousel-slick" class="bg-[#034AAD]">
    <div class="container">
        <div class="single-item">
            <img src="{{ asset('image/2.jpg') }}" alt="...">
            <img src="{{ asset('image/3.jpg') }}" alt="...">
            <img src="{{ asset('image/1.jpg') }}" alt="...">
        </div>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <h2 class="text-3xl text-center mt-10 pb-10">Oferta do dia</h2>

        <div class="multiple-items flex">
            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide1.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">iPad Mini 3 Apple 64GB Cinza Chumbo Tela 7,9” - Retina Wi-Fi Processador M7 Câmera 5MP + Frontal - iPad Mini</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 3.999,99</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 3.799,99</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide2.jpeg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Fogão Consul 5 bocas Preto com mesa de vidro, chama dupla especial e grades individuais de ferro fundido </h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 1.999,00 </h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ R$ 1.899,05</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide3.jpeg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Tênis Feminino Adidas Duramo 10 GW4113 Running Academia - branco</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 399,90</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 375,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide4.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">NOTEBOOK SAMSUNG NP550 I3/4GB/256GB 15"</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 2.299,90</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 2.092,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide5.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">CREATINA HARDCORE RELOAD (300G) - INTEGRALMEDICA</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 105,00</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 99,99</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide6.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Sofá 2 Lugares Suede Decore - cor bege</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 1.300,00</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 1.159,00</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>
        </div>
    </div>
</section>

<section id="box-page">
    <div class="container">
        <div class="py-10 flex md:gap-8">
            <div class="flex h-64">
                <div class="h-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden lg:h-auto lg:w-64"
                     style="background-image: url('{{ asset('image/casa.jpg') }}')" title="">
                </div>
                <div class="bg-white rounded-b p-4 flex flex-col justify-center leading-normal lg:rounded-b-none lg:w-[394px] lg:rounded-r">
                    <div class="">
                        <div class="text-gray-900 font-normal text-3xl mb-5 lg:w-60">Sua casa de cara nova</div>
                        <a href="#" class="bg-blue-700 text-white py-2 px-4 rounded text-base hover:bg-fuchsia-400">Ver mais</a>
                    </div>
                </div>
            </div>

            <div class="flex h-64">
                <div class="h-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden lg:h-auto lg:w-64"
                     style="background-image: url('{{ asset('image/feshion.jpg') }}')" title="">
                </div>
                <div class="bg-white rounded-b p-4 flex flex-col justify-center leading-normal lg:rounded-b-none lg:w-[394px] lg:rounded-r">
                    <div class="">
                        <div class="text-gray-900 font-normal text-3xl mb-5 lg:w-60">O melhor da moda</div>
                        <a href="#" class="bg-blue-700 text-white py-2 px-4 rounded text-base hover:bg-fuchsia-400">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="best-sellers">
    <div class="container">
        <h2 class="text-3xl text-center mt-2 pb-10">Mais vendidos</h2>

        <div class="multiple-items flex">
            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide7.jpeg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Ventilador Mondial 40Cm VTX-40-8P Com Controle 220v/60Hz.</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 3.999,99</h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 196,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide8.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Cropped Em Moleton Com Capuz</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 1.999,00 </h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ R$ 79,99</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide9.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Fone Bluetooth 5.1 EDIFIER W600BT</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 399,90</h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 199,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide10.jpeg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Ar Condicionado Split Hi Wall Britânia 9000 BTU/h Frio BAC9000TFM12 220 Volts - Britania "</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 2.299,90</h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 2.092,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide5.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">CREATINA HARDCORE RELOAD (300G) - INTEGRALMEDICA</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 105,00</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 99,99</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide6.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Sofá 2 Lugares Suede Decore - cor bege</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 1.300,00</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 1.159,00</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>
        </div>
    </div>
</section>

<section id="card-information">
    <div class="container">
        <div class="text-center sm:grid sm:grid-cols-3 sm:gap-3 md:gap-5">
            <div class="bg-white text-lg my-5 py-10 shadow rounded-2xl sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3">
                    <img class="h-14 w-14 sm:h-10 sm:w-10 lg:h-14 lg:w-14" src="{{ asset('image/seguro.png') }}" alt="...">
                    <h2 class="pt-5">Compra fácil e segura</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="bg-white text-lg my-5 py-10 shadow rounded-2xl sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3">
                    <img class="h-14 w-14 sm:h-10 sm:w-10 lg:h-14 lg:w-14" src="{{ asset('image/pagamento.png') }}" alt="...">
                    <h2 class="pt-5">Pague como quiser</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="bg-white text-lg my-5 py-10 shadow rounded-2xl sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3 md:px-5">
                    <img class="h-14 w-14 sm:h-11 sm:w-11 lg:h-14 lg:w-14" src="{{ asset('image/entrega.png') }}" alt="...">
                    <h2 class="pt-5">Frete grátis a partir de R$ 79</h2>
                    <p class=""></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="best-sellers">
    <div class="container">
        <h2 class="text-3xl text-center mt-10 pb-10">Novidades</h2>

        <div class="multiple-items flex">
            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide11.jpeg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Caminha Cachorro pets 3 em 1 Conforto Media</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 3.999,99</h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 199,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide12.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Coluna Inteligente Amazon Echo 5ª Geração Alexa Branco</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 1.999,00 </h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 429,99</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide13.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Armário de Cozinha Ametista 5 Portas 1 Gaveta 3 Nichos </h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
{{--                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 399,90</h5>--}}
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5">R$ 499,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide4.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">NOTEBOOK SAMSUNG NP550 I3/4GB/256GB 15"</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 2.299,90</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 2.092,90</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide5.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">CREATINA HARDCORE RELOAD (300G) - INTEGRALMEDICA</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 105,00</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 99,99</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>

            <div class="card items-cente text-center bg-white rounded-xl p-4 m-4 w-full cursor-pointer md:p-2 md:m-2 lg:p-4 lg:m-4">
                <div class="like w-full h-5 flex justify-end mb-1.5 cursor-pointer">
                    <i class="fa-solid fa-heart text-zinc-300 text-xl hover:text-red-600"></i>
                </div>

                <img class="product w-full" src="{{ asset('image/slide6.jpg') }}" alt="Foto do produto">

                <h4 class="text-zinc-600 text-md font-light my-2" title="">Sofá 2 Lugares Suede Decore - cor bege</h4>

                <div class="rating text-yellow-500">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>

                <div class="price flex justify-center gap-2.5 my-2">
                    <h5 class="line-through font-light text-zinc-500 text-sm">R$ 1.300,00</h5>
                    <h5 class="font-semibold text-zinc-500 text-xl mb-1.5"> R$ 1.159,00</h5>
                </div>

                <a class="text-indigo-400 text-center border-2 border-indigo-400 rounded-2xl p-2 duration-200 hover:text-white hover:bg-indigo-400"
                   href="#">Adicionar ao carrinho
                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-blue-800 py-10 sm:py-16 sm:mt-10">
    <div class="container">
        <div class="px-5 lg:flex justify-between items-center">
            <div class="text-white pb-3 text-2xl sm:pb-6 sm:text-3xl lg:w-72 lg:pb-0 lg:text-2xl xl:text-3xl">
                <h2>Receba ofertas e benefícios por e-mail</h2>
            </div>

            <div class="border-0 pb-6 lg:pb-0">
                <input type="email" placeholder="Digite seu e-mail" class="outline-0 p-2 mr-1 rounded-xl">
                <button class="bg-fuchsia-400 text-white font-semibold mt-2 py-2 px-3 rounded-xl hover:bg-purple-500 sm:mt-0">Se inscrever</button>
            </div>

            <div class="text-white text-xl sm:text-2xl lg:text-xl lg:w-52  xl:text-2xl">
                <h3 class="">Atendimento</h3>
                <a href="#" class="hover:text-fuchsia-400">0800 111 0102</a>
                <p class="text-base">Horário de atendimento telefônico 7h00 às 21h00</p>
            </div>
        </div>
    </div>
</section>

@endsection


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

<section>
    <div class="container">
        <div class="py-10 text-center sm:grid sm:grid-cols-3 sm:gap-3 md:gap-5 lg:gap-10">
            <div class="bg-white text-lg py-10 shadow rounded-2xl sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3">
                    <img class="sm:h-10 sm:w-10 lg:h-14 lg:w-14" src="{{ asset('image/seguro.png') }}" alt="...">
                    <h2 class="pt-5">Compra fácil e segura</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="bg-white text-lg py-10 shadow rounded-2xl sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3">
                    <img class="sm:h-10 sm:w-10 lg:h-14 lg:w-14" src="{{ asset('image/pagamento.png') }}" alt="...">
                    <h2 class="pt-5">Pague como quiser</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="bg-white text-lg py-10 shadow rounded-2xl sm:col-span-1">
                <div class="flex flex-col justify-center items-center sm:px-3 md:px-5">
                    <img class="sm:h-11 sm:w-11 lg:h-14 lg:w-14" src="{{ asset('image/entrega.png') }}" alt="...">
                    <h2 class="pt-5">Frete grátis a partir de R$ 79</h2>
                    <p class=""></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <h2 class="text-2xl pb-10">Oferta do dia</h2>

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

<section>
    <div class="container">
        <div class="block py-10 md:flex md:gap-8">
            <div class="flex h-64 shadow-xl">
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

            <div class="flex h-64 shadow-xl">
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
@endsection


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
        <div class="grid grid-cols-3 py-10 gap-10">
            <div class="col-span-1 bg-white text-lg py-5 shadow rounded-2xl">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-14 w-14" src="{{ asset('image/seguro.png') }}" alt="...">
                    <h2 class="pt-5">Compra fácil e segura</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="col-span-1 bg-white text-lg py-5 shadow rounded-2xl">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-14 w-14" src="{{ asset('image/pagamento.png') }}" alt="...">
                    <h2 class="pt-5">Pague como quiser</h2>
                    <p class=""></p>
                </div>
            </div>

            <div class="col-span-1 bg-white text-lg py-5 shadow rounded-2xl">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-14 w-14" src="{{ asset('image/entrega.png') }}" alt="...">
                    <h2 class="pt-5">Frete grátis a partir de R$ 79</h2>
                    <p class=""></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="featured-products">
    <div class="container">
        <h2 class="text-center text-2xl pb-10">Oferta do dia</h2>
        <div class="multiple-items flex"></div>
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


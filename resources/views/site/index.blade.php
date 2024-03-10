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
        <div class="grid grid-cols-3 py-10">
            <div class="col-span-1 bg-white text-lg py-5 mx-4 border-2 rounded-2xl">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-14 w-14" src="{{ asset('image/seguranca.png') }}" alt="...">
                    <h2 class="">Compra fácil e segura</h2>
                    <p class=""></p>
                </div>

            </div>
            <div class="col-span-1 bg-white text-lg py-5 mx-4 border-2 rounded-2xl">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-14 w-14" src="{{ asset('image/pagamento.png') }}" alt="...">
                    <h2 class="">Pague como quiser</h2>
                    <p class=""></p>
                </div>

            </div>
            <div class="col-span-1 bg-white text-lg py-5 mx-4 border-2 rounded-2xl">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-14 w-14" src="{{ asset('image/entrega.png') }}" alt="...">
                    <h2 class="">Frete grátis a partir de R$ 79</h2>
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
@endsection


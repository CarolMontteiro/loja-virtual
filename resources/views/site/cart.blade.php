@extends('site.template')
@section('content')
    <section>
        <div class="container">
            <h1 class="text-blue-800 text-lg text-center font-semibold uppercase py-6 sm:text-xl sm:py-10 md:text-2xl">
                Seu Carrinho
            </h1>

            <div class="flex bg-white">
                <div class="w-[70%]">
                    <div class="flex border border-b-zinc-100 text-sm text-zinc-600">
                        <span class="w-1/2 py-3 pl-2.5 uppercase">Produtos</span>
                        <span class="w-1/5 py-3 pl-2 uppercase">Quantidade</span>
                        <span class="w-1/5 py-3 pl-2 uppercase">Total</span>
                    </div>

                    <div id="content-product">

                    </div>
                </div>

{{--                <div class="product-cart flex h-36 py-5">--}}
{{--                    <div class="flex w-1/2 product-description pl-1 cursor-pointer group overflow-hidden">--}}
{{--                        <div class="w-[200px] h-[200px] ">--}}
{{--                            <img class="w-full"--}}
{{--                                 src="{{ asset('image/slide8.jpg') }}"--}}
{{--                                 alt=""--}}
{{--                            >--}}
{{--                        </div>--}}

{{--                        <div class="description-item-cart">--}}
{{--                            <h4 class="item-title text-zinc-600 text-sm font-normal pl-2 pr-3 my-2 group-hover:text-blue-800">--}}
{{--                                Cropped/Blusa Manga Longa Moletom Feminino Preto Com Capuz--}}
{{--                            </h4>--}}
{{--                            <span class="text-zinc-600 text-sm pl-2">Cor: Preta</span>--}}
{{--                            <span class="text-zinc-600 text-sm pl-2">Tamanho: P</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="product-quantity w-[18%] flex justify-center items-center relative">--}}
{{--                        <button type="button" class="remove-item absolute left-[20px] text-[30px] hover:text-red-500">-</button>--}}
{{--                        <input type="text" value="1" min="0" class="product-quantity-input w-[110px] h-[30px] text-center bg-zinc-100 rounded">--}}
{{--                        <button type="button" class="add-item absolute right-[20px] text-lg hover:text-blue-800">+</button>--}}
{{--                    </div>--}}

{{--                    <div class="product-price w-1/5 flex flex-col justify-center items-center text-center">--}}
{{--                        <div class="price">--}}
{{--                            <h5 class="line-through font-light text-zinc-500 text-xs">R$ 79,99</h5>--}}
{{--                            <h5 class="cart-product-price font-semibold text-zinc-500 text-md mb-1.5">R$ 65,99</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <button onclick="" class="remove-from-cart flex justify-center items-center w-[12%] font-semibold">--}}
{{--                        <i class="fa-regular fa-circle-xmark text-2xl text-blue-800 hover:text-red-500"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}

                <div class="bg-zinc-200 w-[30%] px-5">
                    <h3 class="text-center font-semibold uppercase py-3 border-2 border-b-zinc-300">Resumo da Compra</h3>

                    <div class="py-5 border-2 border-b-zinc-300">
                        <h3 class="font-semibold text-sm">Cupom de desconto</h3>
                        <input type="text" class="w-3/5 mt-2 mr-2 py-1 px-1.5 outline-none rounded">
                        <button class="bg-blue-800 text-white text-sm py-1.5 px-2 rounded shadow hover:bg-yellow-400 hover:text-blue-800 hover:font-semibold">
                            Aplicar
                        </button>
                    </div>

                    <div class="grid grid-cols-2 py-5">
                        <h3 class="font-semibold text-sm">Subtotal (<span class="value-total-item-cart">1</span> item)</h3>
                        <span id="subtotal-item-cart" class="font-semibold text-sm text-end">R$ 3.799,99</span>
                        <input id="subtotal-item-cart-hidden" type="hidden" value="">


                        <h3 class="text-sm py-2">Descontos</h3>
                        <span class="text-sm py-2 text-end text-red-500">R$ 0,00</span>

                        <h3 class="text-sm">Cupom</h3>
                        <span class="text-sm text-end">R$ 0,00</span>
                    </div>

                    <div class="grid grid-cols-2 font-semibold py-5">
                        <h2 class="text-lg">Total de pedido:</h2>
                        <span class="text-end">R$ 3.799,99</span>
                    </div>

                    <div class="text-center py-5">
                        <button class="uppercase font-semibold text-white bg-blue-800 rounded w-full py-3 mb-3 hover:bg-yellow-400 hover:text-blue-800">Finalizar Compra</button>
                        <button class="uppercase font-semibold border border-neutral-800 rounded w-full py-3 hover:bg-yellow-400 hover:text-blue-800">Continuar Comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

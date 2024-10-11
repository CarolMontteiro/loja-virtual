@extends('site.template')
@section('content')
<section id="identification" class="pb-20">
    <div class="container">
        <h1 class="text-blue-800 text-lg text-center font-semibold uppercase py-6 sm:text-xl sm:py-10 md:text-2xl">Identificação</h1>
        <form  class="bg-white py-10 md:flex md:justify-between">
            <div class="create-account border-b-2 pb-10 md:border-r-2 md:border-b-0 md:w-1/2 ">
                <h2 class="text-blue-800 text-xl text-center font-semibold md:text-2xl">Crie uma conta</h2>
                <div id="errorEmail" class="pb-6 md:pt-2 text-center text-red-500"></div>
                <fieldset class="w-4/5 mx-auto mb-3 sm:w-3/5">
                    <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Email</label>
                    <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                    <span class="span-required text-red-500"></span>
                </fieldset>

                <div class="text-center">
                    <button type="button" class="bg-lime-600 text-white text-lg font-semibold mt-4 py-2 px-16 rounded-lg hover:bg-blue-800 hover:text-yellow-400" onclick="createAccount()">Continuar</button>
                    <span class="block mt-5 text-gray-600">Dúvidas?<a href="#" class="underline hover:text-blue-800"> Fale conosco</a></span>
                </div>
            </div>

            <div id="login" class=" md:w-1/2">
                <h2 class="text-blue-800 text-2xl text-center font-semibold pt-10 md:pt-0">Já sou cliente</h2>
                <div id="errorLogin" class="pb-6 md:pt-2 text-center text-red-500"></div>
                <fieldset class="w-4/5 mx-auto mb-6 sm:w-3/5">
                    <label for="email-login" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Email</label>
                    <input type="text" id="email-login" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailLoginValidate()">
                    <span class="span-required text-red-500"></span>
                </fieldset>

                <fieldset class="w-4/5 mx-auto mb-3 sm:w-3/5">
                    <label for="password" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Senha</label>
                    <input type="password" id="password" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800">
{{--                    <span class="span-required block mt-[1px] text-red-500">dhdhhddhhd</span>--}}
                </fieldset>

                <div class="text-center">
                    <button type="button" class="bg-lime-600 text-white text-lg font-semibold mt-4 py-2 px-16 rounded-lg hover:bg-blue-800 hover:text-yellow-400" onclick="login()">Continuar</button>
                    <a href="#" class="block mt-5 text-gray-600 underline hover:text-blue-800">Esqueci minha senha</a>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

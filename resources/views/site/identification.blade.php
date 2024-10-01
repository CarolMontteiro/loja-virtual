@extends('site.template')
@section('content')
<section id="identification">
    <div class="container">
        <h1 class="text-blue-800 text-2xl text-center font-semibold uppercase sm:mt-5 py-10">Identificação</h1>
        <form class="bg-white flex justify-between py-10">
            <div class="create-account border-r-2 w-1/2 text-center">
                <h2 class="text-blue-800 text-2xl text-center font-semibold pb-10">Crie uma conta</h2>
                <fieldset>
                    <label for="email-acconunt" class="text-lg mr-2">Email</label>
                    <input type="email" id="email-acconunt" class="w-1/2 border-2 rounded-lg p-1.5 outline-none">
                </fieldset>

                <button type="submit" class="bg-lime-600 text-white text-lg font-semibold mt-4 py-2 px-16 rounded-lg hover:bg-blue-800 hover:text-yellow-400">Continuar</button>
                <span class="block mt-5 text-gray-600">Dúvidas?<a href="#" class="underline hover:text-blue-800"> Fale conosco</a></span>
            </div>

            <div class="login w-1/2 text-center">
                <h2 class="text-blue-800 text-2xl text-center font-semibold pb-10">Já sou cliente</h2>
                <fieldset>
                    <label for="email-login" class="text-lg mr-2">Email</label>
                    <input type="text" id="email-login" class="w-1/2 border-2 rounded-lg mb-6 p-1.5 outline-none">
                </fieldset>

                <fieldset>
                    <label for="password" class="text-lg mr-2">Senha</label>
                    <input type="password" id="password" class="w-1/2 border-2 rounded-lg mb-3 p-1.5 outline-none">
                </fieldset>

                <button type="submit" class="bg-lime-600 text-white text-lg font-semibold mt-4 py-2 px-16 rounded-lg hover:bg-blue-800 hover:text-yellow-400">Continuar</button>
                <a href="#" class="block mt-5 text-gray-600 underline hover:text-blue-800">Esqueci minha senha</a>
            </div>
        </form>
    </div>
</section>

@endsection

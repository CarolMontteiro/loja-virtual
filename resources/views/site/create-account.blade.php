@extends('site.template')
@section('content')
    <section>
        <div class="container">
            <h1 class="text-blue-800 text-lg text-center font-semibold uppercase py-6 sm:text-xl sm:py-10 md:text-2xl">
                Crie sua conta
            </h1>

            <form class=" p-10 bg-white">
                <fieldset class="mb-3 md:w-1/2 lg:w-2/5">
                    <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Email</label>
                    <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800">
                    <span class="span-required text-red-500"></span>
                </fieldset>
                <div class="lg:flex lg:justify-between">
                    <div class="md:w-1/2 lg:w-2/5">
                        <h2 class="text-blue-800 text-xl font-semibold py-5">Dados Pessoais</h2>
                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">CPF</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Nome Completo</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Data de Nascimento</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Telefone</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Senha</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Confirme a senha</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>
                    </div>
                    <div class="md:w-1/2 lg:w-2/5">
                        <h2 class="text-blue-800 text-xl font-semibold py-5">Endereço</h2>
                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">CEP</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Estado</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Cidade</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Bairro</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Endereço</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>

                        <fieldset class="mb-6">
                            <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Número residencial</label>
                            <input type="email" id="email-acconunt" class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800" oninput="emailAcconuntValidate()">
                            <span class="span-required text-red-500"></span>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

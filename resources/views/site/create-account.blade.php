@extends('site.template')
@section('content')
<section>
    <div class="container">
        <h1 class="text-blue-800 text-lg text-center font-semibold uppercase py-6 sm:text-xl sm:py-10 md:text-2xl">
                Crie sua conta
        </h1>

        <form class="p-10">
            <fieldset class="mb-3 md:w-1/2 lg:w-2/5">
                <label for="email-acconunt" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Email</label>
                <input type="email" id="email-acconunt"
                       class="required w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800">
                <span class="span-required text-red-500"></span>
            </fieldset>

            <div class="lg:flex lg:justify-between">
                <div class="md:w-1/2 lg:w-2/5">
                    <h2 class="text-blue-800 text-xl font-semibold py-5">Dados Pessoais</h2>
                    <fieldset class="mb-6">
                        <label for="cpf" class="text-lg pb-1 mr-2 text-gray-600 text-start block">CPF</label>
                        <input type="text" id="cpf"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               maxlength="14"
                               oninput="validateFieldCPF()" onkeydown="blockLyrics(event)">
                        <span class="span-required-field ml-1 text-red-500">error</span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="name" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Nome Completo</label>
                        <input type="text"
                               id="name"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="validateFieldName()">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="birth" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Data de Nascimento</label>
                        <input type="text"
                               id="birth"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               maxlength="10"
                               oninput="validateFieldBirth()" onkeydown="blockLyrics(event)">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="tel" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Telefone</label>
                        <input type="text"
                               id="tel"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               maxlength="15"
                               oninput="validateFieldTel()" onkeydown="blockLyrics(event)">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="password" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Senha</label>
                        <input type="password"
                               id="password"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="validateFieldPassword()">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="conf-password" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Confirme
                                a senha</label>
                        <input type="password"
                               id="conf-password"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="comparePassword(this)">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>
                </div>

                <div class="md:w-1/2 lg:w-2/5">
                    <h2 class="text-blue-800 text-xl font-semibold py-5">Endereço</h2>
                    <fieldset class="mb-6">
                        <label for="cep" class="text-lg pb-1 mr-2 text-gray-600 text-start block">CEP</label>
                        <input type="text"
                               id="cep"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               maxlength="9" oninput="validateFieldCEP()" onkeydown="blockLyrics(event)" onblur="pesquisacep(this.value)">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="state" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Estado</label>
                        <input type="text"
                               id="uf"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="city" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Cidade</label>
                        <input type="text"
                               id="cidade"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="neighborhood" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Bairro</label>
                        <input type="text"
                               id="bairro"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="validateFieldNeighborhood()">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="address" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Endereço</label>
                        <input type="text"
                               id="rua"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               oninput="validateFieldStreet()">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>

                    <fieldset class="mb-6">
                        <label for="number-house" class="text-lg pb-1 mr-2 text-gray-600 text-start block">Número
                            residencial</label>
                        <input type="text"
                               id="number-house"
                               class="required-field w-full border-2 rounded-lg p-1.5 outline-none hover:bg-gray-100 hover:border-2 hover:border-blue-800 focus:border-blue-800"
                               placeholder="Número ou s/n">
                        <span class="span-required-field ml-1 text-red-500"></span>
                    </fieldset>
                </div>
            </div>

            <div>
                <input type="checkbox" id="checkbox">
                <label for="checkbox" class="text-lg pb-1 mr-2 text-gray-600">Li e aceito a <a href="#">Política de
                        privacidade</a> do LOGOMARCA
                </label>
            </div>

            <button
                class="bg-lime-600 text-white text-lg font-semibold mt-4 py-2 px-16 rounded-lg hover:bg-blue-800 hover:text-yellow-400">
                Continuar
            </button>
            </form>
        </div>
</section>
{{--<script>--}}

{{--    const fieldErrorCreateAccount = document.getElementsByClassName('required-field');--}}
{{--    const spanErrorCreateAccount = document.getElementsByClassName('span-required-field');--}}

{{--    function setError(index, message) {--}}
{{--        console.log('test')--}}
{{--        fieldErrorCreateAccount[index].style.border = '2px solid #f4f4f4';--}}
{{--        spanErrorCreateAccount[index].style.display = 'block';--}}
{{--        spanErrorCreateAccount[index].textContent = message;--}}
{{--    }--}}
{{--    function removeError(index) {--}}
{{--        fieldErrorCreateAccount[index].style.border = '';--}}
{{--        spanErrorCreateAccount[index].style.display = 'none';--}}
{{--        spanErrorCreateAccount[index].textContent = '';--}}
{{--    }--}}
{{--    // console.log(campo[1])--}}
{{--    function fieldRegex(inputId, index, regex, messageError) {--}}
{{--        const valueField = document.getElementById('inputId').value;--}}

{{--        if(valueField.trim() === "") {--}}
{{--            setError(index, "O campo não pode estar vazio");--}}
{{--        }else if(!regex.test(valueField)) {--}}
{{--            setError(index, messageError);--}}
{{--        }else {--}}
{{--            removeError(index);--}}
{{--        }--}}
{{--    }--}}

{{--    function fieldCPF() {--}}
{{--        const cpfRegex = /^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$/;--}}
{{--        fieldRegex('cpfI', 1, cpfRegex, "CPF inválido");--}}
{{--    }--}}
{{--</script>--}}

@endsection

const fieldErrorCreateAccount = document.getElementsByClassName('required-field');
const spanErrorCreateAccount = document.getElementsByClassName('span-required-field');

function blockLyrics(event) {
    const key = event.key;
    if(!/[0-9]/.test(key)
        && key !== 'Backspace'
        && key !== 'Delete'
        && key !== 'ArrowLeft'
        && key !== 'ArrowRight'
        && key !== 'Tab') {

        event.preventDefault();
    }
}
function setErrorCreateAccount(index, message) {
    fieldErrorCreateAccount[index].style.border = '2px solid #e63636';
    spanErrorCreateAccount[index].style.display = 'block';
    spanErrorCreateAccount[index].textContent = message;
}
function removeErrorCreateAccount(index) {
    fieldErrorCreateAccount[index].style.border = '';
    spanErrorCreateAccount[index].style.display = 'none';
    spanErrorCreateAccount[index].textContent = '';
}
function validateFieldRegex(inputId, index, regex, messageError) {
    const valueInputField = document.getElementById(inputId).value;

    if(valueInputField.trim() === "") {
        setErrorCreateAccount(index, "O campo não pode estar vazio");
    }else if(!regex.test(valueInputField)) {
        setErrorCreateAccount(index, messageError);
    }else {
        removeErrorCreateAccount(index);
    }
}

function validateFieldText(inputId, index) {
    const fieldText = document.getElementById(inputId).value;

    if(fieldText.trim() === "") {
        setErrorCreateAccount(index, "O campo não pode estar vazio" );
    }else if(fieldText.length < 3) {
        setErrorCreateAccount(index, "Deve ter no mínimo três caracteres");
    }else {
        removeErrorCreateAccount(index);
    }
}
function validateFieldCPF() {
    const cpfRegex = /^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$/;
    validateFieldRegex('cpf', 0, cpfRegex, "Adicione um CPF válido");

    document.getElementById('cpf').addEventListener('keypress', () => {
        const cpfLength = document.getElementById('cpf').value.length;

        if(cpfLength === 3 || cpfLength === 7) {
            document.getElementById('cpf').value += '.';
        }else if(cpfLength === 11) {
            document.getElementById('cpf').value += '-';
        }
    })
}

function validateFieldName() {
    validateFieldText('name', 1)
}

function validateFieldBirth() {
    const birthRegex = /^(\d{2})\/(\d{2})\/(\d{4})$/;
    validateFieldRegex('birth', 2, birthRegex, "Data inválida");

    document.getElementById('birth').addEventListener('keypress', () => {
        const birthLength = document.getElementById('birth').value.length;

        if(birthLength === 2 || birthLength === 5) {
            document.getElementById('birth').value += '/'
        }
    })
}
function validateFieldTel() {
    const telRegex = /(\(\d{2}\)\s)(\d{4,5}\-\d{4})/;
    validateFieldRegex('tel', 3, telRegex, "Adicione um número válido");

    document.getElementById('tel').addEventListener('keypress', () => {
        const telLength = document.getElementById('tel').value.length;
        if(telLength === 2) {
            document.getElementById('tel').value = '(' +  document.getElementById('tel').value;
            document.getElementById('tel').value += ') ';
        }else if(telLength === 10) {
            document.getElementById('tel').value += '-';
        }
    })
}
function validateFieldPassword() {
    const fieldPassword = document.getElementById('password').value;

    if(fieldPassword.trim() === "") {
        setErrorCreateAccount(4, "O campo não pode estar vazio");
    }else if(fieldPassword.length < 8) {
        setErrorCreateAccount(4, "A senha deve ter no mínimo 8 caracteres");
    }else {
        removeErrorCreateAccount(4);
        comparePassword();
    }
}
function comparePassword() {
    const compareFieldPassword = document.getElementById('conf-password').value;

    if(compareFieldPassword.trim() === "") {
        setErrorCreateAccount(5, "O campo não pode estar vazio");
    }else if(fieldErrorCreateAccount[4].value === compareFieldPassword && compareFieldPassword.length >= 8) {
        removeErrorCreateAccount(5);
    }else {
        setErrorCreateAccount(5, "A senha deve ser compativeis");
    }
}
function validateFieldCEP() {
    const cepRegex = /\d{5}-\d{3}/;
    validateFieldRegex('cep', 6, cepRegex, "CEP inválido");

    document.getElementById('cep').addEventListener('keypress', () => {
        let cepLength = document.getElementById('cep').value.length;

        if(cepLength === 5) {
            document.getElementById('cep').value += '-';
        }
    });
}

function pesquisacep(valor) {
    let cep = valor.replace(/\D/g, ''); // o replace com o regex (/\D/g, ""), ele vai substituir os dados que não são numéricos por ""(nada)

    if (cep != "") {
        var validacep = /^[0-9]{8}$/;

        if(validacep.test(cep)) {
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";

            var script = document.createElement('script');

            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            document.body.appendChild(script);

        }
        else {
            limpa_formulario_cep();
            alert("Formato de CEP inválido.");
        }
    }
    else {
        limpa_formulario_cep();
    }
}

function limpa_formulario_cep() {
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    }
    else {
        limpa_formulario_cep();
        alert("CEP não encontrado.");
    }
}

function validateFieldNeighborhood() {
    validateFieldText('bairro', 9)
}
function validateFieldStreet() {
    validateFieldText('rua', 10)
}



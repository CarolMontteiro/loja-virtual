
const campo = document.getElementsByClassName('required');
const span = document.getElementsByClassName('span-required');
const emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/;

const VALID_EMAIL = 'carol123@gmail.com';
const VALID_PASSWORD = 'Carol1.';

function setError(index, mensage){
    campo[index].style.border = '2px solid #e63636';
    span[index].style.display = 'block';
    span[index].textContent = mensage;
}
function removeError(index) {
    campo[index].style.border = '';
    span[index].style.display = 'none';
    span[index].textContent = '';
}
function emailValidateField(index, valueEmail) {
    if (valueEmail.trim() === "") {
        setError(index, "O campo não pode estar vazio");
    } else if (!emailRegex.test(valueEmail)) {
        setError(index, "Adicione um email válido");
    } else {
        removeError(index);
    }
}
function emailAcconuntValidate(inputId, index) {
    const valueEmail = document.getElementById(inputId).value;
    emailValidateField(index, valueEmail);
}

function emailLoginValidate(inputId, index) {
    const valueEmailLogin = document.getElementById(inputId).value;
    emailValidateField(index, valueEmailLogin);
}

function logar() {
    const valueEmailLogin = document.getElementById('email-login').value;
    const valuePassword = document.getElementById('password').value;

    if(valueEmailLogin  === "carol123@gmail.com" && valuePassword === "Carol1.") {
        alert('Sucesso');
        // location.href = "index.html";
    }else{
        alert('Email ou senha inválida');
    }
}


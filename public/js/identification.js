
const campo = document.getElementsByClassName('required');
const span = document.getElementsByClassName('span-required');
const emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/;

const VALID_EMAIL = 'carol123@gmail.com';
const VALID_PASSWORD = 'Carol1.';

function setError(index, mensage){
    campo[index].style.border = '2px solid #e63636';
    span[index].style.display = 'block';
}
function removeError(index) {
    campo[index].style.border = '';
    span[index].style.display = 'none';
}
function emailAcconuntValidate() {
    const valueEmail = document.getElementById('email-acconunt').value;
    if (!emailRegex.test(valueEmail)) {
        setError(0);
        span[0].textContent = "Adicione um email válido";
    } else {
        removeError(0);
    }
}
function createAccount() {
    const valueEmail = document.getElementById('email-acconunt').value;
    const errorEmail = document.getElementById('errorEmail');

    if (valueEmail.trim() === "") {
        errorEmail.textContent = "O campo não pode estar vazio";
    }else {
        errorEmail.textContent = "";
    }
}
function emailLoginValidate() {
    const valueEmailLogin = document.getElementById('email-login').value;
    if (valueEmailLogin.trim() === "") {
        setError(1);
        span[1].textContent = "O campo não pode estar vazio";
    } else if (!emailRegex.test(valueEmailLogin)) {
        setError(1);
        span[1].textContent = "Adicione um email válido";
    } else {
        removeError(1);
    }
}
function login() {
    const valueEmailLogin = document.getElementById('email-login').value;
    const valuePassword = document.getElementById('password').value;
    const errorLogin = document.getElementById('errorLogin');

    if(valueEmailLogin.trim() === "" && valuePassword.trim() === "") {
        errorLogin.textContent = "O campo não pode estar vazio"
    }else if(valueEmailLogin  === "carol123@gmail.com" && valuePassword === "Carol1.") {
        errorLogin.textContent = ""
    } else{
        errorLogin.textContent = "Email ou senha inválida"
    }
}

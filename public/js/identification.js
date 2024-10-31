
const fieldErrorLogin = document.getElementsByClassName('required');
const spanErrorLogin = document.getElementsByClassName('span-required');
const emailRegex = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})$/;

const VALID_EMAIL = 'carol123@gmail.com';
const VALID_PASSWORD = 'Carol1.';

function setErrorLogin(index){
    fieldErrorLogin[index].style.border = '2px solid #e63636';
    spanErrorLogin[index].style.display = 'block';
}
function removeErrorLogin(index) {
    fieldErrorLogin[index].style.border = '';
    spanErrorLogin[index].style.display = 'none';
}
function emailAcconuntValidate() {
    const valueEmailAcconunt = document.getElementById('email-acconunt').value;
    if (!emailRegex.test(valueEmailAcconunt)) {
        setErrorLogin(0);
        spanErrorLogin[0].textContent = "Adicione um email válido";
    } else {
        removeErrorLogin(0);
    }
}
function createAccount() {
    const valueEmailAcconunt = document.getElementById('email-acconunt').value;
    const errorEmailAcconunt = document.getElementById('errorEmail');

    if (valueEmailAcconunt.trim() === "") {
        errorEmailAcconunt.textContent = "O campo não pode estar vazio";
    }else {
        errorEmailAcconunt.textContent = "";
    }
}
function emailLoginValidate() {
    const valueEmailLogin = document.getElementById('email-login').value;
    if (valueEmailLogin.trim() === "") {
        setErrorLogin(1);
        spanErrorLogin[1].textContent = "O campo não pode estar vazio";
    } else if (!emailRegex.test(valueEmailLogin)) {
        setErrorLogin(1);
        spanErrorLogin[1].textContent = "Adicione um email válido";
    } else {
        removeErrorLogin(1);
    }
}
function login() {
    const valueEmailLogin = document.getElementById('email-login').value;
    const valuePasswordLogin = document.getElementById('password').value;
    const errorLogin = document.getElementById('errorLogin');

    if(valueEmailLogin.trim() === "" && valuePasswordLogin.trim() === "") {
        errorLogin.textContent = "O campo não pode estar vazio"
    }else if(valueEmailLogin  === "carol123@gmail.com" && valuePasswordLogin === "Carol1.") {
        errorLogin.textContent = ""
    } else{
        errorLogin.textContent = "Email ou senha inválida"
    }
}

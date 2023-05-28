let corpo = window.document.getElementById('corpo');
let geral = window.document.getElementById('geral')
let btn_inicio = window.document.getElementById('page1');
let btn_seguranca = window.document.getElementById('page2');
let btn_chat = window.document.getElementById('page3');
let btn_notifi = window.document.getElementById('page4');
let btn_conta = window.document.getElementById('page5');

let plus = window.document.getElementById('plus');


let contaria = window.document.getElementById('contaria');
let notificaria = window.document.getElementById('notificaria');
let chataria = window.document.getElementById('chataria');

btn_conta.addEventListener('click', function () {
    notificaria.classList.remove('activa');
    chataria.classList.remove('activa');
    contaria.classList.toggle('activa');
});

btn_notifi.addEventListener('click', function () {
    contaria.classList.remove('activa');
    chataria.classList.remove('activa');
    notificaria.classList.toggle('activa');
});

btn_chat.addEventListener('click', function () {
    contaria.classList.remove('activa');
    notificaria.classList.remove('activa');
    chataria.classList.toggle('activa');
});

geral.addEventListener('click', function () {
    contaria.classList.remove('activa');
});

function inicio() {
    window.location.href = "account.php";
}

function seguranca() {
    window.location.href = "seguranca.php";
}
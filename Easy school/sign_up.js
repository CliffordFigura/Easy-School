var comecar1 = document.getElementById('comecar1');
var comecar2 = document.getElementById('comecar2');
var comecar3 = document.getElementById('comecar3');
var comecar4 = document.getElementById('comecar4');
var comecar5 = document.getElementById('comecar5');
var passo5 = document.getElementById('e');

let INTnome = document.getElementById('nome');
let INTemail = document.getElementById('email');
let INTtelefone = document.getElementById('telefone');
let INTsenha = document.getElementById('senha');
let guardarConta = document.getElementById('guardarConta');
let radioM = document.getElementById('Masculino');
let radioF = document.getElementById('Femenino');
let radioP = document.getElementById('Personalizado');
let aviso = document.getElementById('aviso');


comecar2.addEventListener('click', function(){

    if ((INTnome.value!=="")&&(INTemail.value!=="")&&(INTtelefone.value!=="")&&(INTsenha.value!=="")) {
            
            alfa.classList.toggle('passado2');
    }
    else{
            alert('Preencha todos os campos para avançar!');
            INTnome.focus();
    }

});



comecar3.addEventListener('click', function(){
            
    alfa.classList.toggle('passado3');
    
});
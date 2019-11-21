
function validar_cad_aluno() {
       
var nome  = document.queryseSelector('input [name="nome"]');
var data_nasc = document.querySelector('input[name="data_nascimento"]');
var sexo   = document.querySelector('input [name="sexo"]');
var genero   = document.querySelector('input [name="genero"]');
var cpf   = document.querySelector('input [name="cpf"]');
var cidade   = document.querySelector('input [name="cidade"]');
var estado   = document.querySelector('input [name="estado"]');
var bairro   = document.querySelector('input [name="bairro"]');
var rua   = document.querySelector('input [name="rua"]');
var cep   = document.querySelector('input [name="cep"]');

if(nome.value == "" || nome.value == null) {
    alert("por favor, informe o nome do aluno.");
    nome.focus();
    nome.style.border = "1px solid red";
    return false;
} 

if (data_nasc.value == "" || data_nasc.value == null) {
    alert("por favor, informe a data de nascimento.");
    data_nasc.focus();
    data_nasc.style.border  = "1px solid red";
    return false;
}

if (data_sexo.value == "" || sexo.value == null) {
    alert("por favor, informe o seu sexo.");
    sexo.focus();
    sexo.style.border  = "1px solid red";
    return false;
}

if (genero.value == "" || genero.value == null) {
    alert("por favor, informe o genero.");
    genero.focus();
    genero.style.border  = "1px solid red";
    return false;
}

if (cpf.value == "" || cpf.value == null) {
    alert("por favor, informe o cpf.");
    cpf.focus();
    cpf.style.border  = "1px solid red";
    return false;
}

if (cidade.value == "" || cidade.value == null) {
    alert("por favor, informe a cidade.");
    cidade.focus();
    cidade.style.border  = "1px solid red";
    return false;
}

if (estado.value == "" || estado.value == null) {
    alert("por favor, informe o estado.");
    estado.focus();
    estado.style.border  = "1px solid red";
    return false;
}

if (bairro.value == "" || bairro.value == null) {
    alert("por favor, informe o bairro.");
    bairro.focus();
    bairro.style.border  = "1px solid red";
    return false;
}

if (rua.value == "" || rua.value == null) {
    alert("por favor, informe a rua.");
    rua.focus();
    rua.style.border  = "1px solid red";
    return false;
}

if (cep.value == "" || cep.value == null) {
    alert("por favor, informe o cep.");
    cep.focus();
    cep.style.border  = "1px solid red";
    return false;
}
}



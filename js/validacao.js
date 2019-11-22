$(function() {
    $('.cep').mask('00000-000');
    $('.phoneWithDDD').mask('(00) 00000-0000');
    $('.dataNasc').mask('00/00/0000');
    $('.rg').mask('0000000000-0');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    
});
var senha = document.getElementById('password');
var confSenha = document.getElementById('password_conf');

function validarSenha(){
    if(senha.value != confSenha.value)
    {
        confSenha.setCustomValidity("Senhas diferentes!");
    }
    else 
    {
        confSenha.setCustomValidity('');
    }
}
senha.onchange = validarSenha;
confSenha.onkeyup = validarSenha;


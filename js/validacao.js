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
botao = document.getElementById("botao");
botao2 = document.getElementById("botaoConfSenha");

function mostrarsenha(){
    botao.addEventListener("mouseup",mouseUp);
    botao.addEventListener("mousedown",mouseDown);
    botao2.addEventListener("mouseup",mouseUp);
    botao2.addEventListener("mousedown",mouseDown);
}
function mouseUp(){
    senha.type = "password";
    confSenha.type = "password";
}
function mouseDown(){
    senha.type = "text";
    confSenha.type = "text";
}
document.getElementById('sexo').addEventListener('keypress', function(evt) {
    if (evt.key != 'f' && evt.key != 'm' && evt.key != 'F' && evt.key != 'M') {
        evt.preventDefault()
        alert('Tecla inválida, digite M ou F!');
    }
});

function validarCPF(cpf) {	
	cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == ''){ return alert('CPF Inválido!') + false;
	}	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return alert('CPF Inválido!') + false;	
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return alert('CPF Inválido!') + false;	
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return alert('CPF Inválido!') + false;
    return true;
}
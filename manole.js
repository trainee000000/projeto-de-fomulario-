
function enviar(){
var nome = document.getElementById ('nome').value;
var cpf = document.getElementById ('cpf').value;
var telefone = document.getElementById ('telefone').value;
var voucher = document.getElementById ('voucher').value;
var email = formuser.email. value;
var senha = document.getElementById ('senha').value;


            if(nome == ""){
            alert("Digite seu nome completo!"); return false;
            
            }
            if(cpf == ""){
            alert("Campo vazio CPF");return false;
           
            }
            if(telefone == ""){
            alert("Campo vazio telefone");return false;
            
            }
            if(voucher == ""){
            alert("Campo vazio voucher");return false;
            
            }
            if(email == "" || email.indexOf('@') == -1 ){
                alert('Preencha o campo E-mail.');
                formuser.email.focus();
                return false;
            }
            if(senha == ""){
            alert("Campo vazio senha");return false;


}
alert('Nome: '+nome +'\n'+'CPF: '+cpf +'\n'+'Telefone: '+telefone +'\n'+'Email: '+email +'\n'+'\n'+ 'Cadastro Feito!!');
}     
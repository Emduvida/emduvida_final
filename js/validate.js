$(document).ready(function () {


    /*validando o formulario de cadastro da pagina inicial*/



    $('.frmCadastro').submit(function () {

        email = $('#email').val();
        confEmail = $('#ConfEmail').val();
        senha = $('#senha').val();
        confSenha = $('#confirmarsenha').val();
//alert(email);
        if (email === "") {

            vermelho('#email');
            mensagem('.erroEmail', 'Campo não pode ficar em branco');

        } else {
            voltarNormal('#email');

            if (email !== confEmail) {

                vermelho('#ConfEmail');
                mensagem('.erroConfEmail', 'E-mails não conferem');

            } else {
                voltarNormal('#ConfEmail');
            }
        }


        if (senha.length < 6) {
            vermelho('#senha');
            mensagem('.erroSenha', 'Senha deve conter no minimo 6 caracteres');
        }else{
            voltarNormal('#senha');
        }
    });



    function vermelho(obj) {
        $(obj).css('border', '1px solid red');
    }

    function mensagem(local, mensagem) {
        $(local).fadeIn();
        $(local).text(mensagem);

        setTimeout(function () {
            $(local).fadeOut();
        }, 1500);
    }

    function voltarNormal(obj) {
        $(obj).css('border', '1px solid #dcdcdc');
    }
});
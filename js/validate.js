$(document).ready(function () {


    /*validando o formulario de cadastro da pagina inicial*/


    $('.frmCadastro').submit(function () {

        email = $('#email').val();
        confEmail = $('#ConfEmail').val();
        senha = $('#senha').val();
        confSenha = $('#confirmarsenha').val();


        if (email === "") {

            vermelho('#email');
            mensagem('.erroEmail', 'Campo não pode ficar em branco');

        } else {

            if (email === confEmail) {

                voltarNormal('#ConfEmail');
                removeMensagem('.erroConfEmail');

            } else {
                vermelho('#ConfEmail');
                mensagem('.erroConfEmail', 'E-mails não conferem');
            }
            voltarNormal('#email');
            removeMensagem('.erroEmail');
        }


        if (senha.length < 6) {
            vermelho('#senha');
            mensagem('.erroSenha', 'Senha deve conter no minimo 6 caracteres');
        } else {
            voltarNormal('#senha');
            removeMensagem('.erroSenha');

        }


    });



    function vermelho(obj) {
        $(obj).css('border', '1px solid red');
    }

    function mensagem(local, mensagem) {
        $(local).fadeIn();
        $(local).text(mensagem);
    }

    function voltarNormal(obj) {
        $(obj).css('border', '1px solid #dcdcdc');
    }

    function removeMensagem(obj) {
        $(obj).fadeOut()();
    }
});
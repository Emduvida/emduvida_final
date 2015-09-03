$(document).ready(function () {


    //validando o formulario de cadastro da pagina inicial*/


    email = $('#email');
    confEmail = $('#ConfEmail');
    senha = $('#senha');
    confSenha = $('#ConfSenha');
    campo = ('#enviarCad');
    
    email.blur(function () {

        if (email.val() === "") {
            desabilitarCampo(campo);
            vermelho('#email');
            mensagem('.erroEmail', 'Campo não pode ficar em branco');

        } else {

            if (email.val() === confEmail.val()) {

                voltarNormal('#ConfEmail');
                removeMensagem('.erroConfEmail');
                habilitarCampo(campo);

            } else {
                vermelho('#ConfEmail');
                mensagem('.erroConfEmail', 'E-mails não conferem');
                desabilitarCampo(campo);
            }

            habilitarCampo(campo);
            voltarNormal('#email');
            removeMensagem('.erroEmail');

        }

    });

    confEmail.blur(function () {

        if (email.val() === confEmail.val()) {

            voltarNormal('#ConfEmail');
            removeMensagem('.erroConfEmail');
            habilitarCampo(campo);

        } else {
            vermelho('#ConfEmail');
            mensagem('.erroConfEmail', 'E-mails não conferem');
            desabilitarCampo(campo);
        }
        //alert("Senha: "+email.val() + "ConfSenha: "+ confEmail.val());
    });

    senha.blur(function () {
        if (senha.val().length < 6) {
            desabilitarCampo(campo);
            vermelho('#senha');
            mensagem('.erroSenha', 'Senha deve conter no minimo 6 caracteres');
        } else {

            if (senha.val() === confSenha.val()) {

                voltarNormal('#ConfSenha');
                removeMensagem('.erroConfSenha');
                habilitarCampo(campo);

            } else {
                vermelho('#ConfSenha');
                mensagem('.erroConfSenha', 'Senhas não conferem');
                desabilitarCampo(campo);
            }
            
            voltarNormal('#senha');
            removeMensagem('.erroSenha');
            habilitarCampo(campo);
        }

       // alert("Senha: "+senha.val() + "ConfSenha: "+ confSenha.val());
    });
    
    confSenha.blur(function(){
        if (senha.val() === confSenha.val()) {

                voltarNormal('#ConfSenha');
                removeMensagem('.erroConfSenha');
                habilitarCampo(campo);

            } else {
                vermelho('#ConfSenha');
                mensagem('.erroConfSenha', 'Senhas não conferem');
                desabilitarCampo(campo);
            }
    });

    //FIM DA VALIDAÇÃO DOS CAMPOS DA HOME

















    //VALIDAÇÃO DA PAGINA DE CADASTRO

    nome = $('#nome');
    sobreNome = $('#sobreNome');
    dataNasc = $('#data');
    cpf = $('#cpf');
    cidade = $('#cidade');
    estado = $('#estado');
    emailCad = $('#email');
    senhaCad = $('#senha');
    campo = $('#enviarResenha');
    
    nome.blur(function () {
        if (nome.val() === "") {
            vermelho(nome);
            mensagem('.errNome', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
            desabilitarCampo(campo);

        } else {
            voltarNormal(nome);
            removeMensagem('.errNome');
            aumentaBarra('.bottomBox1', 25);
            habilitarCampo(campo);
        }
    });


    sobreNome.blur(function () {

        if (sobreNome.val() === "") {
            vermelho(sobreNome);
            mensagem('.erroSobreNome', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
            desabilitarCampo(campo);
        } else {
            voltarNormal(sobreNome);
            removeMensagem('.erroSobreNome');
            aumentaBarra('.bottomBox1', 25);
            habilitarCampo(campo);
        }
    });

    dataNasc.blur(function () {
        if (dataNasc.val() === "") {
            vermelho(dataNasc);
            mensagem('.erroNasc', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
            desabilitarCampo(campo);
        } else {
            voltarNormal(dataNasc);
            removeMensagem('.erroNasc');
            aumentaBarra('.bottomBox1', 25);
            habilitarCampo(campo);
        }
    });

    cpf.blur(function () {
        if (cpf.val() === "") {
            vermelho(cpf);
            mensagem('.erroCPF', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
            desabilitarCampo(campo);
        } else {
            voltarNormal(cpf);
            removeMensagem('.erroCPF');
            aumentaBarra('.bottomBox1', 25);
            habilitarCampo(campo);
        }
    });

    cidade.blur(function () {
        if (cidade.val() === "") {
            vermelho(cidade);
            mensagem('.erroCidade', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox2', 50);
            desabilitarCampo(campo);
        } else {
            voltarNormal(cidade);
            removeMensagem('.erroCidade');
            aumentaBarra('.bottomBox2', 50);
            habilitarCampo(campo);
        }
    });


    estado.blur(function () {

        if (estado.val() === "") {
            vermelho(estado);
            mensagem('.erroEstado', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox2', 50);
            desabilitarCampo(campo);
        } else {
            voltarNormal(estado);
            removeMensagem('.erroEstado');
            aumentaBarra('.bottomBox2', 50);
            habilitarCampo(campo);
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
        $(obj).css('border', '1px solid #b5b5b5');
    }

    function removeMensagem(obj) {
        $(obj).fadeOut();
    }

    function aumentaBarra(obj, tamanho) {
        total = $(obj).width() / $(obj).parent().width() * 100;
        total += tamanho;
        barra = total;
        $(obj).css('width', barra + '%');

    }

    function diminuiBarra(obj, tamanho) {
        total = $(obj).width() / $(obj).parent().width() * 100;

        total -= tamanho;

        if (total < 0) {
            barra = 0;
        } else {
            barra = total;
        }
        $(obj).css('width', barra + '%');
    }


    
    function habilitarCampo(obj) {
        $(obj).prop('disabled', false);
    }
    function desabilitarCampo(obj) {

        $(obj).prop('disabled', true);
    }
});


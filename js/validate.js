$(document).ready(function () {


    //validando o formulario de cadastro da pagina inicial*/


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

    //FIM DA VALIDAÇÃO DOS CAMPOS DA HOME


    //VALIDAÇÃO DA PAGINA DE CADASTRO

    nome = $('#nome');
    sobreNome = $('#sobreNome');
    dataNasc = $('#data');
    cpf = $('#cpf');
    cidade = $('#data');
    estado = $('#estado');
    email = $('#email');
    senha = $('#senha');


    nome.blur(function () {
        if (nome.val() === "") {
            vermelho(nome);
            mensagem('.errNome', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);

        } else {
            voltarNormal(nome);
            removeMensagem('.errNome');
            aumentaBarra('.bottomBox1', 25);
        }
    });
    
    
    sobreNome.blur(function () {

        if (sobreNome.val() === "") {
            vermelho(sobreNome);
            mensagem('.erroSobreNome', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
        } else {
            voltarNormal(sobreNome);
            removeMensagem('.erroSobreNome');
            aumentaBarra('.bottomBox1', 25);
        }
    });

    dataNasc.blur(function(){
        if (dataNasc.val() === "") {
            vermelho(dataNasc);
            mensagem('.erroNasc', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
        } else {
            voltarNormal(dataNasc);
            removeMensagem('.erroNasc');
            aumentaBarra('.bottomBox1', 25);

        }
    });


    $('.frmCadastroPrincipal').submit(function () {





        barra1 = 0;




        




        if (cpf.val() === "") {
            vermelho(cpf);
            mensagem('.erroCPF', 'Este campo não pode estar vazio');

        } else {
            voltarNormal(cpf);
            removeMensagem('.erroCPF');

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
});


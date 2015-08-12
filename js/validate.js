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
    cidade = $('#cidade');
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

    cpf.blur(function(){
        if (cpf.val() === "") {
            vermelho(cpf);
            mensagem('.erroCPF', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox1', 25);
        } else {
            voltarNormal(cpf);
            removeMensagem('.erroCPF');
            aumentaBarra('.bottomBox1', 25);
        }
    });

    cidade.blur(function(){
        if (cidade.val() === "") {
            vermelho(cidade);
            mensagem('.erroCidade', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox2', 50);
        } else {
            voltarNormal(cidade);
            removeMensagem('.erroCidade');
            aumentaBarra('.bottomBox2', 50);
        }
    });
    
    
    estado.blur(function(){
       
       if (estado.val() === "") {
            vermelho(estado);
            mensagem('.erroEstado', 'Este campo não pode estar vazio');
            diminuiBarra('.bottomBox2', 50);
        } else {
            voltarNormal(estado);
            removeMensagem('.erroEstado');
            aumentaBarra('.bottomBox2', 50);
        }
        
    });
    
    
    $('.frmCadastroPrincipal').submit(function () {





        barra1 = 0;




        




        


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


$(document).ready(function () {

    //valindado o formulario de cadastro de produtos
    var nomeProd = $('.inputProd');
    var nomeFab = $('.inputFab');

    nomeProd.blur(function () {

        if (nomeProd.val() == "") {

            erro("Campo não pode ficar vazio", nomeProd);
            desabilitarCampo(".cadProd");
        } else {
            habilitarCampo(".cadProd");

            tiraErro(nomeFab);
        }

    });

    nomeFab.blur(function () {

        if (nomeFab.val() == "") {

            erro("Campo não pode ficar vazio", nomeFab);
            desabilitarCampo(".cadProd");
        } else {
            habilitarCampo(".cadProd");

            tiraErro();

        }

    });


    function erro(text, elemento) {

        $(elemento).prev().append("<span class='erroForm'>" + text + "</span>");

    }

    function tiraErro() {
        $('.erroForm').fadeOut();
    }
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


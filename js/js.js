$(document).ready(function () {

    var qtdQual = 0;
    var qtdDef = 0;
    var qual = '';

    $('.j_qualidades').click(function () {

        if (qtdQual < 4) {

            $('.qualidades').append('<div class="box-input-defQual"><p class="icone"><i class="fa fa-thumbs-up"></i></p><input type="text" name="qualidades[]" class="frm-padrao input-defQual inpt' + qtdQual + '"/></div>');
            $('.inpt' + qtdQual).focus();

            qtdQual++;
        } else {
            $('.msgQualidades').text("Você só pode adicionar 5 pontos positivos ");
            $('.j_qualidades').hide();
        }
        return  false;
    });

    $('.j_defeitos').click(function () {

        if (qtdDef < 4) {

            $('.def').append('<div class="box-input-defQual"><p class="icone redicone"><i class="fa fa-thumbs-down"></i></p><input type="text" name="defeitos[]" class="frm-padrao input-defQual inptDef' + qtdDef + '"/></div>');
            $('.inptDef' + qtdDef).focus();
            qtdDef++;
        } else {
            $('.msgDefeitos').text("Você só pode adicionar 5 pontos negativos");
            $('.j_defeitos').hide();
        }
        return  false;
    });






    $('.icon-search').click(function () {

        $('#frmPesquisa').fadeIn();
        $('.pesquisar').focus();

    });


    $('.imgPesquisar').click(function () {

        $('#frmPesquisa').fadeOut();

    });

    $('#btnEntrar').click(function () {
        $('.login').fadeToggle();
        return false;

    });

    qtd = 1;

    $('.btnAddImage').click(function () {


        $('.input-file').prepend("<input type='file' name='imagem[]' class='files btnFile" + qtd + "'/>");


        $('.btnFile' + qtd).click().hide();

        $('.btnFile' + qtd).change(function () {


            $('.box-carregamento').append('<div class="box-image"></div>');

        });


        qtd++;

        if (qtd === 6) {
            $(this).hide();


        }

        $('form[name=cadResenha]').submit(function () {
            qtd = 1;
        });

        return false;
    });

    $('.btnFile').change(function () {

        $(this).ajaxSubmit({
            url: '../op/teste.php',
            beforeSubmit: function () {

            },
            error: function () { /*loader.empty().text("Erro")*/
            },
            resetForm: true,
            uploadProgress: function (evento, posicao, total, completo) {
            },
            success: function (resposta) {
                alert(resposta);
            },
            complete: function () {

            }
        });
    });



    $('.resenha').mouseover(function () {
        // resenha = $('.resenha').attr('id');

        $('.' + $(this).attr('id')).addClass("aparece");

    });

    $('.resenha').mouseleave(function () {
        // resenha = $('.resenha').attr('id');

        $('.' + $(this).attr('id')).removeClass("aparece");

    });


    $('.box-resenha-vistas').mouseover(function () {
        // resenha = $('.resenha').attr('id');

        $('.r' + $(this).attr('id')).addClass("aparece");

    });

    $('.box-resenha-vistas').mouseleave(function () {
        // resenha = $('.resenha').attr('id');

        $('.r' + $(this).attr('id')).removeClass("aparece");

    });


    $('#carregaImagem').click(function () {

        $('.imgUsuarioUp').click();

    });

    $('.imgUsuarioUp').change(function () {

    });




    //mascarando os campos do formulario de cadastro

    $('#data').mask("99/99/9999");
    $('#cpf').mask("999.999.999-99");



    //fazendo o slide em js

    //alert($('.img').length);

    $('.img').hide();
    var imagens = $('.img');
    var progresso = $('.progresso-slide');

    imagens.eq(0).fadeIn();

    if(imagens.length <= 1){
        $('.btnProximo').hide();
        $('.btnAnterior').hide();
    }else{
        setInterval(function () {

        proximo();

    }, 2500);
    }
    
    

    $('.btnProximo').click(function () {

        proximo();

    });

    $('.btnAnterior').click(function () {
        anterior();
    });






    function proximo() {
        for (i = 0; i <= imagens.length; i++) {

            if (imagens.eq(i).is(':visible')) {
                imagens.eq(i).hide();
                i++;
                if (i === imagens.length) {
                    imagens.eq(0).fadeIn("fast");
                } else {
                    imagens.eq(i).fadeIn("fast");
                }

                break;
            }
        }
    }

    function anterior() {
        for (i = 0; i <= imagens.length; i++) {

            if (imagens.eq(i).is(':visible')) {
                imagens.eq(i).hide();
                i--;
                if (i === imagens.length) {
                    imagens.eq(0).fadeIn("fast");
                } else {
                    imagens.eq(i).fadeIn("fast");
                }

                break;
            }
        }
    }

});
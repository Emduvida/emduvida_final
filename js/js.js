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

            
            $('.box-carregamento').append('<div class="box-image">'+ qtd +'</div>');
        
        });


        qtd++;
        
        if (qtd === 6) {
            $(this).hide();
            
            
        }
        
        $('form[name=cadResenha]').submit(function(){
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



});
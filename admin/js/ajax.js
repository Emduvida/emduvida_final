$('.msg').hide();
$(document).ready(function () {


    var carr = $('.carregando');
    var carrFundo = $('#carregando');
    var errmsg = $('.msg');
    var forms = $('form');
    var botao = $('.j_buttom');
    var urlPost = 'php/inserir.php';
    var opt = "";

    errmsg.hide();
    carrFundo.hide();
    carr.hide();


    botao.attr("type", "submit");

    forms.submit(function () {
        errmsg.fadeOut("fast");
        return false;
    });


    function carregando() {
        carrFundo.fadeIn("fast");
        errmsg.empty().html('<p class="load"><i class="fa fa-spinner fa-pulse"></i><span>Aguarde um momento</span></p>').fadeIn("fast");
    }



    function fechaLoad() {
        setTimeout(function () {
            carr.fadeOut("fast");
            carrFundo.fadeOut("fast");
        }, 300);
    }


    function fechaErro(tempo) {
        setTimeout(function () {
            errmsg.fadeOut("fast");
        }, tempo);
    }

    function Redirecionar(tempo, local) {
        setTimeout(function () {
            location.href = local;
        }, tempo);
    }


    function errosend() {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="erro"><i class="fa fa-times-circle"></i><span>Erro inesperado: </strong>Favor contate o admin!</span></p>').fadeIn("fast");
    }


    //GENERICAS

    function erroDados(mensagem) {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="erro"><i class="fa fa-times-circle"></i><span>' + mensagem + '</span></p>').fadeIn("fast");

    }

    function sucesso(mensagem) {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="accept"><i class="fa fa-check-circle"></i><span>' + mensagem + '</span></p>').fadeIn("fast");

    }

    $.ajaxSetup({
        url: urlPost,
        type: 'POST',
        beforeSend: carregando,
        error: errosend
    });

    var loginAdm = $('form[name="loginAdm"]');
    loginAdm.submit(function () {

        $(this).ajaxSubmit({
            url: 'op/gerais.php',
            data: {acao: "loginAdm"},
            beforeSubmit: function () {

            },
            error: function () {
                alert('erro')
            },
            //resetForm: true,
            success: function (resposta) {
                switch (resposta) {
                    case '1':
                        erroDados("Verifique se digitou os dados corretamente!");
                        fechaErro(1500);
                        break;
                    case '2':
                        erroDados("Seu usuário está bloqueado, por favor procure a administração");
                        fechaErro(1500);
                        break;
                    case '3':
                        erroDados("Esta área é restrita apenas a administradores");
                        fechaErro(1500);
                        break;
                    case '4':
                        sucesso("Seja bem vindo administrador!");
                        Redirecionar(1500, 'home');
                        break;
                    case '5':
                        sucesso("Seja bem vindo Master!");
                        Redirecionar(1500, 'home');
                        break;
                }
                //$('.retorno').html(resposta);

            },
            complete: function (resposta) {

            }
        });


        return false;

    });

    var alterarUsuario = $('form[name="alteraUsuario"]');
    alterarUsuario.submit(function () {

        $(this).ajaxSubmit({
            url: 'op/alterar.php',
            data: {acao: "altUsuario"},
            beforeSubmit: function () {

            },
            error: function () {
                alert('erro');
            },
            //resetForm: true,
            success: function (resposta) {

                switch (resposta) {
                    case '1':
                        sucesso("Usuario alterado com sucesso!");
                        fechaErro(1500);
                        location.reload();
                        break;
                    case '2':
                        erroDados("Erro ao alterar o usuario, contate o desenvolvedor!");
                        fechaErro(1500);
                        break;
                    default :
                        alert(resposta);
                        break;
                }

            },
            complete: function (resposta) {

            }
        });


        return false;

    });


    $('.transformaAdm').click(function () {

        $.ajax({
            url: 'op/alterar.php',
            data: "&acao=toAdm&cod=" + $(this).attr('id'),
            type: "GET",
            beforeSubmit: function () {

            },
            error: function () {

            },
            success: function (resposta) {

                switch (resposta) {
                    case '1':
                        sucesso("Usuario transformado em admin");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');
                        break;
                    case '2':

                        erroDados("Erro ao alterar, contate o desenvolvedor");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');

                        break;
                    default :
                        erroDados("");
                        break;
                }

            },
            complete: function (resposta) {

            }

        });
        return false;
    });

    $('.transformaComum').click(function () {
        $.ajax({
            url: 'op/alterar.php',
            data: "&acao=toComum&cod=" + $(this).attr('id'),
            type: "GET",
            beforeSubmit: function () {

            },
            error: function () {

            },
            success: function (resposta) {
                switch (resposta) {
                    case '1':

                        sucesso("Usuario transformado em admin");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');

                        break;
                    case '2':

                        erroDados("Erro ao alterar, contate o desenvolvedor");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');

                        break;
                    default :
                        erroDados("");
                        break;
                }
            },
            complete: function (resposta) {

            }
        });
        return false;
    });

    $('.ativarUser').click(function () {
        $.ajax({
            url: 'op/alterar.php',
            data: "&acao=toAtivo&cod=" + $(this).attr('id'),
            type: "GET",
            beforeSubmit: function () {

            },
            error: function () {

            },
            success: function (resposta) {
                switch (resposta) {
                    case '1':

                        sucesso("Usuario ativado com sucesso");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');

                        break;
                    case '2':

                        erroDados("Erro ao alterar, contate o desenvolvedor");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');

                        break;
                    default :
                        erroDados("");
                        break;
                }
            },
            complete: function (resposta) {

            }
        });
        return false;
    });

    $('.inativarUser').click(function () {
        $.ajax({
            url: 'op/alterar.php',
            data: "&acao=toInativo&cod=" + $(this).attr('id'),
            type: "GET",
            beforeSubmit: function () {

            },
            error: function () {

            },
            success: function (resposta) {
                switch (resposta) {
                    case '1':

                        sucesso("Usuario desativado com sucesso");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/1/inativos');

                        break;
                    case '2':

                        erroDados("Erro ao alterar, contate o desenvolvedor");

                        fechaErro(1500);

                        Redirecionar(1000, 'usuarios/');

                        break;
                    default :
                        erroDados("");
                        break;
                }
            },
            complete: function (resposta) {

            }
        });
        return false;
    });


    $('.frmProdutoAdmin').submit(function () {

        $(this).ajaxSubmit({
            url: 'op/inserir.php',
            data: {acao: "cadProduto"},
            beforeSubmit: function () {

            },
            error: function () {
                alert('erro');
            },
            //resetForm: true,
            success: function (resposta) {

                switch (resposta) {
                    case '1':
                        erroDados("Produto já cadastrado!");
                        fechaErro(1500);
                        break;
                    case '2':
                        sucesso("Produto cadastrado com sucesso!");
                        Redirecionar(1500, 'produtos');
                        break;
                    default:
                        erroDados("Erro inesperado, contate o desenvolvedor!");
                        fechaErro(1500);
                        break;
                }

            },
            complete: function (resposta) {

            }
        });


    });


    $('.alterarProduto').submit(function () {

        $(this).ajaxSubmit({
            url: 'op/alterar.php',
            data: {acao: "altProd"},
            beforeSubmit: function () {

            },
            error: function () {
                alert('erro');
            },
            success: function (resposta) {

                switch (resposta) {
                    case '1':
                        sucesso("Produto alterado com sucesso!")
                        setTimeout(function(){
                            location.reload();
                        },1500);
                        break;
                    case '2':
                        erroDados("Erro inesperado, contate o desenvolvedor!");
                        fechaErro(1500);
                        break;
                }

            },
            complete: function (resposta) {

            }
        });


    });



});
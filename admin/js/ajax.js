$(document).ready(function(){
    
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
        carr.empty().html('<p class="load"><img src="js/482.GIF" class="loadImg" alt="Carregando..."/></p>').fadeIn("fast");
    }
    
    

    function fechaLoad(){
     setTimeout(function(){
     carr.fadeOut("fast");
     carrFundo.fadeOut("fast");
     },300);
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
        errmsg.empty().html('<p class="erro"><strong>Erro inesperado: </strong>Favor contate o admin!</p>').fadeIn("fast");
    }


    //GENERICAS

    function erroDados(mensagem) {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="erro">' + mensagem + '</p>').fadeIn("fast");

    }

    function sucesso(mensagem) {
        carrFundo.hide();
        carr.hide();
        errmsg.empty().html('<p class="accept">' + mensagem + '</p>').fadeIn("fast");

    }

    $.ajaxSetup({
        url: urlPost,
        type: 'POST',
        beforeSend: carregando,
        error: errosend
    });

    var loginAdm = $('form[name="loginAdm"]');
   loginAdm.submit(function(){
       
      $(this).ajaxSubmit({
          
          url: 'op/gerais.php',
          data: {acao: "loginAdm"},
          beforeSubmit: function(){
             
          },
          error: function(){alert('erro')},
          //resetForm: true,
          success: function( resposta ){
                   $('.retorno').html(resposta);
                
          },
          complete: function(resposta){
              
          }
       });
       
       
        return false;
        
   });
    

});
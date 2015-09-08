$(document).ready(function () {



    $('.txtVerPerfil').click(function () {
        
        id = $(this).attr('id');
        
        $('.dados').slideUp();
        
        $('.' + id).slideToggle()();
        

    });

});
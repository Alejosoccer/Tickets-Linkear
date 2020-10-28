  /*--------------------------
  preloader
  ---------------------------- */
  $(window).on('load', function() {
    var pre_loader = $('#preloader');
    pre_loader.fadeOut('slow', function() {
      $(this).remove();

    });
  });

var button_submit = document.getElementById('button_submit');
var ver_credenciales = document.getElementById('ver_credenciales');

ver_credenciales.addEventListener('click', function(){
    var container = document.querySelector('.container');
    container.style.display='block';
});



button_submit.addEventListener('click', function(){

    
var usuario = "usuario@gmail.com";
var contraseña = "123456789";

var input_user = document.getElementById('usuario').value;

var input_clave = document.getElementById('clave').value;



    if(input_user===usuario && input_clave===contraseña){

        window.location.href="compra.html";
        //window.location = "compra.hml";
        

    }else{

        window.location = "login.html";
        
    }

});



//setTimeout ("redireccionar()", 5000);




  //como poner la sugerencia para un vendeor de productos lo sistema operativos más robustos
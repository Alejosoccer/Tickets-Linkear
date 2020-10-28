(function($) {
  "use strict";

  $(document).ready(function () {



    /*    
   var position = $(window).scrollTop(); 
   var height = $("#about").height();


   $(window).scroll(function() {

    var scroll = $(window).scrollTop();
    var altura = $("#about").height();
    var total = altura - 200;


    if(scroll > position && (height >= 30) ) {
      $('#imagen-animated').addClass('animated fadeInUp');
        return true;
        
    } 

    else if(scroll > position && height > 30){

         $('#imagen-animated').removeClass('animated fadeInUp');
         return true;

    }

    else{
      $('#imagen-animated').removeClass('animated fadeInUp');
      return false;
    }
    
    
    position = scroll;
});
      
*/

  
    const search_btn = document.querySelector(".search_btn");
    const modal_search = document.querySelector("#modal-search");
    const close_modal = document.querySelector("#close_modal");

    $('.image-nav').hide();
    $('#form-filter').hide();
    $('#filter-back').hide();

    $('#filter-span').click(function() { 
      $('#form-filter').show();
      $('#form-modal').hide();
      $('#filter-back').show();
      $('#filter-span').hide();
    
  
    });


    $('#filter-back').click(function() { 
      $('#form-filter').hide();
      $('#form-modal').show();
      

      $('#filter-back').hide();
      $('#filter-span').show();
    
    });


    

    search_btn.addEventListener("click", function () {

      $(".sea").removeClass('active');
      
      modal_search.classList.toggle("move");
      
      //image_show.classList.toggle("show");
  });


  close_modal.addEventListener("click", function () {
      
    modal_search.classList.toggle("move");
    $(".sea").removeClass('active');
      
    //image_show.classList.toggle("show");
});




/*MODAL CARRITO */

const carrito_btn = document.querySelector(".carrito");
const modal_carrito = document.querySelector("#modal-carrito");
const close_carrito = document.querySelector("#close_carrito");


carrito_btn.addEventListener("click", function () {

  $(".carrito").removeClass('active');
  $("spanNumero").removeClass('active');
      
  modal_carrito.classList.toggle("move");
  //image_show.classList.toggle("show");
});


close_carrito.addEventListener("click", function () {
  $(".car").removeClass('active');
  modal_carrito.classList.toggle("move");
  main_menu.removeClass("active");
  $(".carrito").removeClass('active');
  $("spanNumero").removeClass('active');
  
  
  //image_show.classList.toggle("show");
});

  


    
  });
  /*--------------------------
  preloader
  ---------------------------- */
  $(window).on('load', function() {
    var pre_loader = $('#preloader');
    pre_loader.fadeOut('slow', function() {
      $(this).remove();

    });


    
	setTimeout(function() {
		$(".alerta-b").fadeOut(1500);
	},5000);
  
  
  });

  /*---------------------
   TOP Menu Stick
  --------------------- */


  







  var s = $("#sticker");
  var pos = s.position();
  $(window).on('scroll', function() {
    var windowpos = $(window).scrollTop() > 300;
    if (windowpos > pos.top) {
      s.addClass("stick");
    
      
      $('#icon-shop').addClass('white-icon');
      


    } else {
      s.removeClass("stick");
      $('#icon-shop').removeClass('white-icon');
      
    }
  });

  /*----------------------------
   Navbar nav
  ------------------------------ */
  var main_menu = $(".main-menu ul.navbar-nav li ");
  main_menu.on('click', function() {
    main_menu.removeClass("active");
    $(this).addClass("active");
  });

  /*----------------------------
   wow js active
  ------------------------------ */
  new WOW().init();

  $(".navbar-collapse a:not(.dropdown-toggle)").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });

  //---------------------------------------------
  //Nivo slider
  //---------------------------------------------
  $('#ensign-nivoslider').nivoSlider({
    effect: 'random',
    slices: 15,
    boxCols: 12,
    boxRows: 8,
    animSpeed: 500,
    pauseTime: 5000,
    startSlide: 0,
    directionNav: true,
    controlNavThumbs: false,
    pauseOnHover: true,
    manualAdvance: false,
  });

  /*----------------------------
   Scrollspy js
  ------------------------------ */
  var Body = $('body');
  Body.scrollspy({
    target: '.navbar-collapse',
    offset: 80
  });

  /*---------------------
    Venobox
  --------------------- */
  var veno_box = $('.venobox');
  veno_box.venobox();

  /*----------------------------
  Page Scroll
  ------------------------------ */
  var page_scroll = $('a.page-scroll');
  page_scroll.on('click', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top - 55
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });

  /*--------------------------
    Back to top button
  ---------------------------- */
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  /*----------------------------
   Parallax
  ------------------------------ */
  var well_lax = $('.wellcome-area');
  well_lax.parallax("50%", 0.4);
  var well_text = $('.wellcome-text');
  well_text.parallax("50%", 0.6);

  /*--------------------------
   collapse
  ---------------------------- */
  var panel_test = $('.panel-heading a');
  panel_test.on('click', function() {
    panel_test.removeClass('active');
    $(this).addClass('active');
  });

  /*---------------------
   Testimonial carousel
  ---------------------*/
  var test_carousel = $('.testimonial-carousel');
  test_carousel.owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      1000: {
        items: 1
      }
    }
  });
  /*----------------------------
   isotope active
  ------------------------------ */
  // portfolio start
  $(window).on("load", function() {
    var $container = $('.awesome-project-content');
    $container.isotope({
      filter: '*',
      animationOptions: {
        duration: 750,
        easing: 'linear',
        queue: false
      }
    });
    var pro_menu = $('.project-menu li a');
    pro_menu.on("click", function() {
      var pro_menu_active = $('.project-menu li a.active');
      pro_menu_active.removeClass('active');
      $(this).addClass('active');
      var selector = $(this).attr('data-filter');
      $container.isotope({
        filter: selector,
        animationOptions: {
          duration: 750,
          easing: 'linear',
          queue: false
        }
      });
      return false;
    });

  });
  //portfolio end

  /*---------------------
   Circular Bars - Knob
--------------------- */
  if (typeof($.fn.knob) != 'undefined') {
    var knob_tex = $('.knob');
    knob_tex.each(function() {
      var $this = $(this),
        knobVal = $this.attr('data-rel');

      $this.knob({
        'draw': function() {
          $(this.i).val(this.cv + '%')
        }
      });

      $this.appear(function() {
        $({
          value: 0
        }).animate({
          value: knobVal
        }, {
          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.val(Math.ceil(this.value)).trigger('change');
          }
        });
      }, {
        accX: 0,
        accY: -150
      });
    });
  }

})(jQuery);





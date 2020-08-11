var elmento = document.querySelector('.container-slider .swiper-container')
var elmento2 = document.querySelector('.container-slider-2 .swiper-container')
var elmento2 = document.querySelector('.container-slider-3 .swiper-container')
 if(elmento){
var swiper = new Swiper(elmento, {
    
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    992: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1400: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

 }




  //======================= 1

if(elmento2){

  var swiper = new Swiper(elmento2, {
    
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  }
    // =============================



    if(elmento2){
    var pushbar = new Pushbar({
      blur: true,
      overlay: true
  })
  var swiper = new Swiper(elmento3, {
    
    breakpoints: {
    
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      992: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    var pushbar = new Pushbar({
      blur: true,
      overlay: true
  })
 
    }
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.slider');
      var elems2 = document.querySelectorAll('.sidenav');
      var instances = M.Slider.init(elems),
          instances2 = M.Sidenav.init(elems2);
      
    });  

;
((d,c,$) => {

  



    $(function($){

      // buscador desde input
      $('#btn_buscar').on('click', function(){
        var termino = $('#buscar').val()
        
        
        
        var postData = {
          action : 'buscarResultado',
          buscar : termino
        }
        jQuery.ajax({
          url: admin_url.ajax_url,
          type:'post',
          data: postData
        }).done(function(response){
          var obj = JSON.parse(response)
          
          
        })
      
      
      
      })


        $('#filtrar .menu  a').on('click', function(){
          var enlaces = $(this).attr('href')
          if( enlaces == '#todos'){
            $('#productos > div ').show()
          }else{
            $('#productos > div ').hide()
          
          $(enlaces).fadeIn()
          return false

          }
          

        })
    })
})(document,console.log,jQuery.noConflict())
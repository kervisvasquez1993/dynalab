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
  

;
((d,c,$) => {
    $(function($){
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
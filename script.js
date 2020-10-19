let elmento = document.querySelector('.container-slider .swiper-container')
let elmento2 = document.querySelector('.container-slider-2 .swiper-container')
let elmento3 = document.querySelector('.container-slider-3 .swiper-container')
let colorCard = document.querySelectorAll('.face2')
let resaldato = document.querySelector('.current-menu-item')
let menu_filtro = document.querySelector('#menu_filtro ')
let selector_front_page = document.querySelector('#slider')
let p = document.querySelectorAll('p')
let areas_terapeutica = document.querySelector('.productos_style')
if(areas_terapeutica)
{
	let boton_footer = document.querySelector('.boton_enviar')
	boton_footer.classList.add('boton_enviar2')
}
if(p){
let pArr = Array.from(p)
pArr.forEach(e => {
  let peli = e.textContent
  if( peli === ''){
    e.remove()
  }
})

}




if(selector_front_page){
  let siteHeader = document.querySelector('.site-header')
  siteHeader.classList.add('content-before')
  
}



//menu pegajoso para el menu

if(menu_filtro){
var stickymenu = menu_filtro
	var stickymenuoffset = stickymenu.offsetTop

window.addEventListener("scroll", function(e){
    requestAnimationFrame(function(){
        if (window.pageYOffset > stickymenuoffset){
            stickymenu.classList.add('p')
        }
        else{
            stickymenu.classList.remove('p')
        }
    })
})
}


//fin del menu pegajoso

// dom script para agregar color al card 
if(colorCard){

let colorCardArr =Array.from(colorCard)


colorCardArr.forEach(color => 
{  
  colorBase = color.getAttribute('style')
  let padre = color.parentElement
  let hermanoElement = padre.children[1]
  hermanoElement.setAttribute('style', colorBase)
})

}

// fin del dom script 



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
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  });

 }


//=================seccion del buscado ===================//
var searchButton = document.getElementById("headerSearchButton");
searchButton.onclick = openSearchBox;

var closeSearchButton = document.getElementById("closeSearchButton");
closeSearchButton.onclick = closeSearchBox;

var searchArea = document.getElementById("searchArea");





var mainHeader = document.getElementById("mainHeader");

function openSearchBox() {
	searchArea.classList.add("active");
}

function closeSearchBox() {
	searchArea.classList.remove("active");
}

function openOffCanvasMenu() {
	if (document.body.classList.contains("menu-active"))
	{
		document.body.classList.remove("menu-active");
	}
	else
	{
		document.body.classList.add("menu-active");
	}	
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



    if(elmento3){
     
  
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

   
    }
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.slider');
      var elems2 = document.querySelectorAll('.sidenav');
      var instances = M.Slider.init(elems),
          instances2 = M.Sidenav.init(elems2);
      var elems3 = document.querySelectorAll('.collapsible');
      var instances3 = M.Collapsible.init(elems3);
    
      
    });  


    /**agregamo elemento para resaltar  */

  
    let divMenu = document.createElement('div')
    divMenu.classList = ('resaltado')
    if(resaldato)
    {
      resaldato.appendChild(divMenu)
    }




    /* filtro para mostrar menu */
   

    
  
    


    /* fin de filtro */
;
((d,c,$) => {

  if($('.filtro-container').length){
    $('.filtro-container').filterizr();
  }

  $(function() {

    var $body = $(document);
    $body.bind('scroll', function() {
        // "Desactivar" el scroll horizontal
        if ($body.scrollLeft() !== 0) {
            $body.scrollLeft(0);
      
        }
    });

}); 

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
  
        
        $('#filtrar .menu  a').on('click', function(e){

          let nombre_selecionado = e.target.parentElement.getAttribute('href')
          let mostar_selecionado = document.querySelector('.mostrar_selecionado')
          let regex = /-/gi;
          if(nombre_selecionado != null)
          {

             let var1 = nombre_selecionado.replace('#', " ")
             let var2 = var1.replace(regex , " ")
             mostar_selecionado.classList.add('center-filtro')
             
             mostar_selecionado.textContent = var2
          }
          
          
          



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

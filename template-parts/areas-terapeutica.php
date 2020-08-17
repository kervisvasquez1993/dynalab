<?php
/**
 * Template Name: Areas Terapeutica 
 * 
 */

 get_header();
 
    $iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
    $productos = get_page_by_title('PRODUCTOS  DYNALAB');
?>
<div class="hero-page" style="background:url('<?php echo get_the_post_thumbnail_url();?>');" >
    <div class="wrap-hero">
         <div class="hero-content">
             <p class="home">INICIO</p> <p>></p> <p><?php the_title();?></p>
         </div>
         <div class="hero-content-2">
             <h4 class="titulo">
                 <?php the_title();?>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>

</header>

<main id="primary" class="site-main">
    <div class="container">
        <div class="row">
                <?php foreach($iconos as $icono):?>
                    <div class="col s6 m4 l3 productos_style">
                        <div class="imagen-terapeutica">
                            <img class="imagen-card" src="<?php echo $icono[image]?>">
                         </div> 
                         <div class="body_card" style="background: <?php  echo $icono[background]?>">
                             <h5 class="titulo-terapeutica"><?php echo $icono[title]?></h5>
                             <p class=""><?php  $icono[description] ?></p>
                          </div>
                    </div>
               <?php endforeach;?> 
        </div>
            
    
   </div>

    
</main><!-- #main -->

<section class="flex-center-column section-info-front" style=" 
background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
background-position: center center;
	  background-repeat: no-repeat;
	  background-size: cover;
">      <div class="center-button">
           <div class="margin-top-10 productos_style">
               <h3 class="text-center">Dynalab</h3>
               <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores repudiandae ipsum aut vel voluptate voluptatem.</p>
            </div>
            <a href="<?php the_permalink($productos->ID);?>" class="btn btn-boton3">Ver Todos los Productos</a> 
       </div>
</section>
<?php get_footer();?>


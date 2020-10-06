<?php
/**
 * Template Name: Areas Terapeutica 
 * 
 */

 get_header();
 
    $iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
    $productos = get_page_by_title('PRODUCTOS  DYNALAB');
    contenido_hero();
?>


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
       </div>
       <a href="<?php the_permalink($productos->ID);?>" class="btn btn-boton_front">Ver Todos los Productos</a> 
</section>
<?php get_footer();?>


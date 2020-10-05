<?php 
get_header();
$sliders = get_post_meta( get_the_ID(), 'slider', true );
$dynalab = get_page_by_title('DYNALAB');
//$titulo_dynalab = get_field('conoce_dynalab');
$conoce_dynala = get_field('contenido_dybalab');
$args = array(
  'posts_per_page' => 5
  ,
  'post_type' => 'post',
  'order' => 'rand'
);
$farmaco2 = new WP_Query($args);
$productos = get_page_by_title('PRODUCTOS  DYNALAB');

?>

<div class="slider" id="slider" style="height: 500px !important">
              <ul class="slides" style="height: 450px !important">
                  
                <?php foreach($sliders as $slider): ?>
                  <li>
                    <img src="<?php echo $slider['image']?>"> <!-- random image -->
                   
                  </li>
                <?php endforeach;?>
              </ul>
              <h6 class="titulo-slider">Comprometidos Con tu Salud</h6>
</div>
        
      
</header>

<?php
 
?>
<div class="container_productos flex-none">
     <?php productos();?>
    <div class="content-none"></div>
      <section class="container-slider ocultar">
         <!-- Swiper -->
          <div class="swiper-container ">
               <div class="swiper-wrapper">
                   <?php productos_slider();?>
               </div>
               <!-- Add Pagination -->
               <div class="paginacion_container">
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>
               </div>
          </div>
      </section>
      <?php
        
         
      ?>
    <div class="boton-productos">
        <a href="<?php the_permalink($productos->ID) ; ?>" class="btn btn-boton2">Ver Todos los Productos</a> 
    </div>
</div>



<section class="flex-center-column section-info-front margin-top-10 center-flex " style=" 
    background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
    background-position: center center;
	  background-repeat: no-repeat;
	  background-size: cover;
">
     
          <?php 
          $titulo_dynalab = 'CONOCE DYNALAB';
          $titlulo_contenido = 'En Dynalab estamos comprometidos con tu salud. Nuestra empresa se centra en otorgar una solución comercial al sector farmacéutico venezolano, ofertando medicamentos de la más alta calidad.';
          banner($titulo_dynalab, $titlulo_contenido);?>
          <a href="<?php the_permalink($dynalab->ID);?>"  class="center btn btn-boton_front">CONOCE DYNALAB</a>
</section>
<section class="container mostrar">
    <div class="parent">
    <?php
        $contador = 0;
        while($farmaco2->have_posts()):
        $contador++;
        $farmaco2->the_post();?>
        <div class="div<?php echo $contador;?>">
            <?php the_post_thumbnail( $post->ID, array('class'=> '') ); ?>
                  
        </div>
        <?php  endwhile; wp_reset_postdata();?>
    </div>
</section>

<section class="product-post ocultar">
     <div class="container-slider-2">
     
     <!-- Swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">

            <?php
                 
                 while($farmaco2->have_posts()):
                  $contador++;
                   $farmaco2->the_post();?>
                    <div class="swiper-slide imagen-producto" >
                    <?php the_post_thumbnail( $post->ID, array('class'=> 'test-imagen') ); ?>
                         <div class="wrapper-content-card">
                             <h3>Lorem idivsum dolor sit amet </h3> 
                             <a href="<?php the_permalink();?>" class="leer-mas">Leer</a>
                         </div>
                    </div>
                <?php
                 endwhile;wp_reset_postdata();
            ?>
                
            </div>
            <!--navegador-->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
     </div>
</section>






<?php get_footer();?>
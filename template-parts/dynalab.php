<?php 
/**
 * Template Name: dynalab
 * **/
get_header();
$iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
$productos = get_page_by_title('PRODUCTOS  DYNALAB');
$id_productos = $productos->ID;

contenido_hero();
?>


</header>
<?php


?>
<main id="primary" class="site-main">
    <div class="container container_quienes_somos">
        <div class="quienes_somos_imagen">
             <img src="<?php the_field('quienes_somos_img')?>" alt="quienes_somos_img">
        </div>
        <div class="quienes_somos_content">
            <?php the_field('quienes_somos');?>
        </div>
    </div>
    <!--   Icon Section   -->
    <div class="container-slider-3 no-mostrar_nuevo">
     <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper ">
                <?php foreach($iconos as $icono):?>
                    <div class="swiper-slide  altura-carusel">
                        <div class="contenido_card">
                             <div class="imagen_repetir">
                                <img class="icono-imagen" src="<?php echo $icono[image]?>">
                                <h5><?php echo $icono[title]?></h5>
                             </div >
                             <div class="contenido_repedito">
                                 <p><?php echo $icono[description] ?></p>
                              </div>
                        </div>
                    </div>
                <?php endforeach;?> 
               
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="container_dynalab_objetivos mostrar">
            
                <?php foreach($iconos as $icono):?>
                    <div class="contenido_card">
                        <div class="imagen_repetir">
                            <img class="icono-imagen" src="<?php echo $icono[image]?>">
                            <h5><?php echo $icono[title]?></h5>
                         </div >
                         <div class="contenido_repedito">
                             <p><?php echo $icono[description] ?></p>
                          </div>
                    </div>
                <?php endforeach;?>
               
    </div>

    <div class="container container_dynalab">
        
            <div class="mision_wrap">
            <img src="<?php the_field('mision_img')?>" alt="mision de dynalab">
            <div>
                 <?php the_field('mision');?>
            </div>
            </div>
        
            <div class="vision_wrap">
            <div>
                 <?php the_field('vision');?>
            </div>
             <img src="<?php the_field('vision_img')?>" alt="vision de dynalab">
            </div>
        
    </div>
</main><!-- #main -->
<?php
                 $titulo_enlace = 'Ver Todos los Productos';
                 $titulo='CONOCE NUESTROS PRODUCTOS';
                 $contenido = 'Encuentra en nuestro amplio portafolio de productos desde medicamentos antialérgicos y antivirales, hasta medicamentos para las funciones gástricas, respiratorias, sistema nervioso, urológicas entre otras.';
                 $imagen = 'banner.jpg';
                 banner_section($titulo, $contenido,$imagen,$id_productos,$titulo_enlace);
                 ?>
<?php get_footer();?>
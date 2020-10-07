<?php 

get_header();
$iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
$productos = get_page_by_title('PRODUCTOS  DYNALAB');
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
    <div class="container-slider-3 ocultar">
     <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper ">
                <?php foreach($iconos as $icono):?>
                    <div class="swiper-slide card ">
                        <div class="image_card">
                            <img class="icono-imagen" src="<?php echo $icono[image]?>">
                         </div> 
                         <div class="body_card">
                             <h5 class="center color-titulos"><?php echo $icono[title]?></h5>
                             <p class="light center"><?php echo $icono[description] ?></p>
                          </div>
                    </div>
                <?php endforeach;?> 
               
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="container_dynalab_objetivos  ">
                <?php foreach($iconos as $icono):?>
                    <div class="contenido_card">
                        <div class="imagen_repetir">
                            <img class="icono-imagen" src="<?php echo $icono[image]?>">
                         </div> 
                         <div class="contenido_repedito">
                             <h5><?php echo $icono[title]?></h5>
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

<?php get_footer();?>
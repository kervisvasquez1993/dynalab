<?php
/**
 * Template Name: Areas Terapeutica 
 * 
 */

 get_header();
 
    $iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
    $productos = get_page_by_title('PRODUCTOS  DYNALAB');
    $productos_id = $productos->ID;
    contenido_hero();
?>


</header>

<main id="primary" class="site-main">   
<div class="row">
    <div id="accordion" >
    <?php 
    $prefijo = 'contenido';
    $content_body = 'body';
    $num = 0 ;
    foreach($iconos as $icono):
    $valor = $prefijo.$num;
    $valor2 = $content_body.$valor;
    $num += 1;
    ?>
<<<<<<< HEAD
 <div class="col s12 m4 l2 productos_style">
       <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
            <img class="imagen-card activator" loading="lazy" src="<?php echo $icono['image'];?>">
            </div>
             <div class="card-reveal" style="border: <?php  echo $icono['background'];?> solid 4px; border-radius: 10% 10% 0 0;">
                  <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                  <br>
                  <p class="parrafo">
                      <?php   echo $icono['description'];?>
                  </p>
                 
             </div>
      </div>
=======
 <div class="col s6 m4 l2 productos_style">
        <div class="imagen-terapeutica" id="<?php echo $valor;?>">
         <a class="btn-link" data-toggle="collapse" data-target="#<?php echo $valor2?>" aria-expanded="true" aria-controls="<?php echo $valor2?>">
            <img class="imagen-card" loading="lazy" src="<?php echo $icono['image'];?>">
         </a>
        <div class="body_card" style="background: <?php  echo $icono['background'];?>">
          
           <div id="<?php echo $valor2?>" class="collapse" aria-labelledby="<?php echo $valor;?>" data-parent="#accordion">
                <div>
                    <p>
                       <?php   echo $icono['description'];?>
                   </p>
                </div>
           </div>
        </div> 
       </div> 
          
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
 </div>
 <?php endforeach;?> 
</div> 
</div>



    
</main><!-- #main -->

<?php 
$titulo_dynalab = "Nuestros Productos";
$contenido = "Encuentra en nuestro amplio portafolio de productos desde medicamentos antialérgicos y antivirales, hasta medicamentos para las funciones gástricas, respiratorias, sistema nervioso, urológicas entre otras.";
$imagen = "banner_areas.jpg";
$nombre_enlace = "CONOCE NUESTROS PRODUCTOS";

banner_section($titulo_dynalab, $contenido,$imagen,$productos_id,$nombre_enlace)?>
<?php get_footer();?>


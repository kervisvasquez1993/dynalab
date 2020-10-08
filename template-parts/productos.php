<?php
/*
    Template Name: Productos
*/
get_header();
$dynalab_terapeutica = get_page_by_title('ÁREAS TERAPÉUTICAS');
$todo_los_productos = get_page_by_title('PRODUCTOS  DYNALAB');
$todo_los_productos_id = $dynalab_terapeutica->ID;
$terminos_toaxonomias = get_terms(array('taxonomy' => 'tipo-Producto'));
 /*
    echo "<img src='$image'>";
    $link = get_term_link($terminos_toaxonomia);
    echo "<a href='$link' >Enlace del producto</a>";
    echo "<br>";
    */
   
?>
<div class="hero-page" style="background:url('<?php echo get_the_post_thumbnail_url();?>');" >
    <div class="wrap-hero">
         <div class="hero-content">
             
              <p class="home"><a href="<?php echo esc_url(home_url('/'));?>">INICIO</a> &gt  <a href="<?php the_permalink($todo_los_productos>ID);?>">  ÁREAS TERAPEÚTICAS</a> &gt <a href="#"> <?php the_title();?> </a> </p>
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
        <div class="row flex-card">
                 <?php foreach( $terminos_toaxonomias as $terminos_toaxonomia):
                     $image = get_field('img_taxonomia', $terminos_toaxonomia);
                     $link = get_term_link($terminos_toaxonomia);
                     ?>
                     <div class="flex-card2">
                           <div class="imagen-terapeutica">
                               <img class="imagen-card" src="<?php echo $image;?>">
                            </div> 
                            <div class="body_card" style="background:blue">
                                <h5 class="titulo-terapeutica">
                                   <a href="<?php echo $link; ?>">
                                      <?php echo $terminos_toaxonomia->name; ?>
                                    </a>
                                </h5>
                                <p class=""><?php ?></p>
                            </div>
                     </div>
                 <?php endforeach; ?>
        </div>
    </div>

 
</main>

<?php 

$titulo_dynalab = "CONOCE LAS ÁREAS TERAPÉUTICAS";
$contenido = "Buscamos atender y satisfacer las necesidades del paciente, por ello contamos con un amplio portafolios de medicamentos a usarse en distintas áreas terapéuticas.";
$imagen = "banner.jpg";
$nombre_enlace = "Ver Todos los Productos";
banner_section($titulo_dynalab, $contenido,$imagen, $todo_los_productos_id,$nombre_enlace)
?>


<?php get_footer();?>
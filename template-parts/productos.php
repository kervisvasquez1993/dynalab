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
             
              
         </div>
         <div class="hero-content-2">
         <p class="home"><a href="<?php echo esc_url(home_url('/'));?>">INICIO</a> &gt  <a href="<?php the_permalink($todo_los_productos>ID);?>">  ÁREAS TERAPEÚTICAS</a> &gt <a href="#"> <?php the_title();?> </a> </p>
             <h4 class="titulo">
                 <?php the_title();?>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>
</div>
</header>
<main id="primary" class="site-main-productos">
    <div class="container">
        <div class="row flex-card" style="margin: 0px !important">
                 <?php foreach( $terminos_toaxonomias as $terminos_toaxonomia):
                     $image = get_field('img_taxonomia', $terminos_toaxonomia);
                     $link = get_term_link($terminos_toaxonomia);
                     ?>
                     <div class="flex-card2">
                           <div class="imagen-terapeutica">
                           <a href="<?php echo $link; ?>">
                               <img class="imagen-card" src="<?php echo $image;?>">
                            </a>
                            </div> 
                            
                     </div>
                 <?php endforeach; ?>
        </div>
    </div>

 
</main>
<a class="waves-effect waves-light btn modal-trigger none" href="#modal1">Modal</a>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>ÁREA RESTRINGIDA</h4>
    <p>
        La información en esta página está destinada exclusivamente a profesionales sanitarios facultados para
        prescribir o dispensar medicamentos y, por lo tanto, es necesaria una formación especializada para su correcta interpretación.
        En caso de no cumplir con dichos requisitos no puede acceder a esta área.

        <br>
        <br>

        Al pulsar sobre el botón "Aceptar", estaré manidestando que es usted un profesional sanitario habilitado para prescribir o dispensar 
        medicamentos, así como su voluntad de acceder en calidad de tal a la información contenido en esta sección.
    
    </p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat blue accent-4">Aceptar</a>
    <a href="<?php echo esc_url(home_url('/'));?>" class="modal-close waves-effect waves-green btn-flat red">Cancelar</a>
  </div>
</div>
<?php 

$titulo_dynalab = "CONOCE LAS ÁREAS TERAPÉUTICAS";
$contenido = "Buscamos atender y satisfacer las necesidades del paciente, por ello contamos con un amplio portafolios de medicamentos a usarse en distintas áreas terapéuticas.";
$imagen = "banner.jpg";
$nombre_enlace = "CONOCE LAS ÁREAS TERAPÉUTICAS";
banner_section($titulo_dynalab, $contenido,$imagen, $todo_los_productos_id,$nombre_enlace)
?>


<?php get_footer();?>
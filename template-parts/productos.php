<?php
/*
    Template Name: Productos
*/
get_header();
?>
<div class="hero-page" style="background:url('<?php echo get_the_post_thumbnail_url();?>');" >
    <div class="wrap-hero">
         <div class="hero-content">
             <p class="home">INICIO</p> > <p><?php the_title();?></p>
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


<?php
 $terminos = get_terms(array(
  'taxonomy' => 'tipo-Producto'
));


foreach( $terminos as $t):
    $image = get_field('img_taxonomia', $t);
    echo "<img src='$image'>";
    print_r($t);
    $link = get_term_link($t);
    echo "<a href='$link' >Enlace del producto</a>";
    echo "<br>";
    
   

endforeach;

?>



<?php get_footer();?>
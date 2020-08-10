<?php
/*
    Template Name: Productos
*/
get_header();
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
             <p class="home">INICIO</p> > <p>ÁREAS TERAPEÚTICAS</p> > <p><?php the_title();?></p>
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
<section class="flex-center-column section-info-front" style=" 
background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
background-position: center center;
	  background-repeat: no-repeat;
	  background-size: cover;
">
     <div class="margin-top-10 ">
          <h3 class="text-center">ÁREA TERAPÉUTICA</h3>
          <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores repudiandae ipsum aut vel voluptate voluptatem.</p>
      </div>
     <button class="btn btn-primary btn-padiing">CONOCE LAS ÁREAS TERAPÉUTICA</button> 
</section>





<?php get_footer();?>
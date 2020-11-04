<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dynalab
 */

get_header();

$pagina_blog = get_option('page_for_posts');
$imagen = get_post_thumbnail_id($pagina_blog);
$imagen = wp_get_attachment_image_src($imagen,'full');
?>
<div class="hero-page" style="background:url('<?php echo $imagen[0];?>');" >
    <div class="wrap-hero">
         <div class="hero-content-2">
		 <p class="home"><a href="<?php echo esc_url(home_url('/'));?>" class="home">INICIO</a> &gt  <?php the_title();?></p>
		   <h4 class="titulo">
                 <?php the_title();?>
                 <img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>
</header>

	<main class="main_block">
		<div class="mostrar_selecionado"></div>
			<?php
			 /*  new WP_Query($args); */ 
	          if(have_posts()) : ?>
		      <div >
		         <div class="row">
			         <div class="filtro-container">
			        <?php while(have_posts()): the_post();?>
					   <?php 
					    $terms = wp_get_post_terms(get_the_ID(), 'categoria-producto');
					    $id_tax = $terms[0];
					    $imagen_categoria_producto = get_field('img_taxonomia',$id_tax);
              
					   ?>  
				       <div class="card_wrap filtr-item" data-category="<?php echo $terms[0]->term_taxonomy_id?>">
					   <div class="card">
                            <div class="card-image waves-effect waves-block waves-light" style="
							 border: 3px solid <?php the_field('color');?>;
							 border-radius: 15px 15px 0 0;
							 							 
							 ">
								   <?php the_post_thumbnail('entrda', array('class' => ' activator')); ?>
                            </div>
                            <div class="card-content " style="border-top: 3px solid <?php the_field('color');?>;
							                                                border-bottom: 15px solid <?php the_field('color');?>;
									                                            border-radius: 0 0 7px 7px ;">
                               
								                  <img  class="contenido-title_blog"  src="<?php the_field('imagen_fondo_producto')?>" alt="">
								                  <span class="content_title_card  "><?php the_title('<h6 class="activator">', '</h6>');?> <span>
								                  <div class="block-ver">
								                         <div  class="menu_iconos_card" data-filter="all">
					                                     	<div class="imagen_card">
                                                               <img src='<?php the_field('imagen_categoria_principal') ?>'>
                                                            </div>
															<div class="imagen_card">
                                                               <img src='<?php the_field('imagen_categoria_principal2') ?>'>
                                                            </div>
															<div class="imagen_card">
                                                               <img src='<?php the_field('imagen_categoria_principal3') ?>'>
                                                            </div>
								                  		    <div class="imagen_card">
								                  		        <img src="<?php echo $imagen_categoria_producto?>">
								                  		    </div>
					                                </div>
									                        <p class="text-mas activator">Ver Más<p>
								                  </div>
								
							</div>
                           <div class="card-reveal">
                               <span class="card-title grey-text text-darken-4"><?php the_title();?><i class="material-icons right">close</i></span>
                                   <p><?php the_content();?></p>
								   <a href="<?php the_field('agregar_archivo');?>" class="pdf">Ver Prospecto</a>
                                </div>
                        </div>
					   </div>
			        <?php endwhile; wp_reset_postdata();?>
			     </div>
		      </div>
		
			 <?php 
			  endif;?>

		</main>

<?php   
get_footer();

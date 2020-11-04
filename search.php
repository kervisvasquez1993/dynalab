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
<<<<<<< HEAD
		 <p class="home"><a href="<?php echo esc_url(home_url('/'));?>" class="home">INICIO</a> &gt  RESULTADO DE BÚSQUEDA</p>
		   <h4 class="titulo">
                 RESULTADO DE BÚSQUEDA
                 <img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
=======
		 <p class=""><a href="<?php echo esc_url(home_url('/'));?>">INICIO</a> &gt <a href="<?php the_permalink($link_blog->ID);?>">BLOG</a> </p>
             <h4 class="titulo">
                 <?php echo $current_tag;?>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>
</header>

<<<<<<< HEAD
	<main class="main_block">
		<h4 class="mostrar_selecionado text-center"> Resultado de Busqueda para: <?php echo the_title();?></h4>
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
								
=======

	<main id="primary" class="site-main">
		<div class="page_blog">
	        <div class="sidebar_blog">
				<?php get_sidebar();?>
			</div>
		     <?php
		     if ( have_posts() ) :
     
		     	if ( is_home() && ! is_front_page() ) :
		     		?>
		     		<header>
		     			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		     		</header>
		     		<?php
		     	endif;

            /* Start the Loop */
            ?>
            <div  class="container_entrada">
			<?php while ( have_posts() ) : the_post();?>
			<div class="card_wrap card_entradas">
			            <div class="face face1" style="color: <?php the_field('color');?>">
							<div class="content">
							    <?php 
								  $thumbID = get_post_thumbnail_id( $post->ID );
								  $imgDestacada = wp_get_attachment_url( $thumbID );
								 //the_post_thumbnail( $post->ID, array('class'=> 'test-imagen') ); ?>
								 <img height="300" src="<?php echo $imgDestacada?>" class="test-imagen" style="
								 		border: 3px solid #00a0df;
										border-radius: 15px 15px 0 0;"> 
							</div>
						</div>
						<div class="face face2">
								<div class="face_imagen2">
									 <img  class="contenido-title_blog"  src="<?php echo get_template_directory_uri();?>/img/foto.png" alt="test">
                                     <p class="titulo_blog2"> <?php the_title();?></p>
								</div>
							<div class="content">
								<span>
				 						<?php the_content();?>
								</span>
								<a href="<?php the_field('agregar_archivo');?>" class="pdf">Ver Prospecto</a>
													
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
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

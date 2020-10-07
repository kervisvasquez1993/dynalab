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
         <div class="hero-content">
             <p class="home">INICIO</p> <p>></p> <p>BLOG</p>
         </div>
         <div class="hero-content-2">
             <h4 class="titulo">
                 BLOG
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>

</header>


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
                                     <p class="titulo_blog2"><?php the_time('F j, Y'); ?></p>
								</div>
							<div class="content">
								<span>
								    <?php the_title();?>
								</span>
								<a href="<?php the_permalink(); ?>" class="pdf">Leer Más</a>							
							</div>
			            </div>
					</div>
			
			
			<?php endwhile;
            the_posts_navigation();
            ?>
            </div>
            <?php 
		    else :
    
		    	get_template_part( 'template-parts/content', 'none' );
    
		    endif;
		   ?>
		</div>
	</main><!-- #main -->

<?php
get_footer();

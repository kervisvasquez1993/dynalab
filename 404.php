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
		 <p class="home"><a href="<?php echo esc_url(home_url('/'));?>" class="home">INICIO</a> &gt  404</p>
		   <h4 class="titulo">
                 404
                 <img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>
</header>


	<main id="primary" class="site-main">
		<div class="page_blog">
	        <div class="sidebar_blog">
			
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

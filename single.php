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
<<<<<<< HEAD
=======
$link_blog = get_page_by_title('BLOG');
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
?>
<div class="hero-page" style="background:url('<?php echo $imagen[0];?>');" >
    <div class="wrap-hero">
         <div class="hero-content-2">
<<<<<<< HEAD
		 <p class="home"><a href="<?php echo esc_url(home_url('/'));?>" class="home">INICIO</a> &gt  <?php the_title();?></p>
		   <h4 class="titulo">
                 <?php the_title();?>
                 <img loading="lazy" src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
=======
		 <p class=""><a href="<?php echo esc_url(home_url('/'));?>">INICIO</a></p>
             <h4>
			 <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
             </h4>
             
             
         </div>
    </div>

</div>
</header>
<main id="primary" class="site-main">
	<div class="container section_blog">
<<<<<<< HEAD
		  
=======
		  <aside class="aside-1">
		         <?php dynamic_sidebar( 'sidebar-2' ); ?>
		  </aside>
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
		  <section class="entradas_blog">
		      <?php
		        while ( have_posts() ) : the_post();
		      ?>
		      	<h3><?php the_title()?></h3>
			   <img src="<?php  the_post_thumbnail_url();?>" alt=" imagen destacada">
			   <div class="flex-wrap_blog"><?php the_content(); ?></div>   
      
		      <?php
     	      endwhile; // End of the loop.
		      ?>
		 </section>
		
    </div>
</main><!-- #main -->

<?php
get_footer();

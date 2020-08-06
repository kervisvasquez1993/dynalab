<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dynalab
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

                
                <?php //$termino_actual = get_queried_object();
                    
                    //$taxonomia = get_taxonomy($termino_actual->taxonomy);
                   // echo "" . $taxonomia->label . ': ' . $termino_actual->name . '';
                    $terminos = get_terms(array(
						'taxonomy' => 'categoria-producto'
					));

					foreach($terminos as $termino):
					echo "<li><a href='#".$termino->slug."'>". $termino->name."</a></li>";
					endforeach;
                ?>
			
			</header><!-- .page-header -->

			<?php
            echo "<pre>";
            print_r($termino_actual);
            echo "</pre>";
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
				

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
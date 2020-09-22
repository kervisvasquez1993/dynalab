<?php 
    /**
     * Template Name: Todos los Productos
     * 
     */

    get_header();
    $args = array
    (
		'posts_per_page' => -1,
		'post_type' => 'productos',
		'order' => 'rand',
	);
      $productos = new WP_Query($args);
    
      contenido_hero();
    ?>
   
    </header>
    <div  class="container2">
<?php 
     while($productos->have_posts()):
        $productos->the_post();?>

<div class="card_blog">
                        <div class="face face1">
				      			<div class="content">
				      				 <?php the_post_thumbnail( $post->ID, array('class'=> 'test-imagen') ); ?>
				      	        </div>
				      	</div>
				      	<div class="face face2">
				      			<div class="face_imagen">
                                    <img class="contenido-title_blog"  src="<?php the_field('imagen_fondo_producto')?>" alt=""> 
				      			  	<p class="titulo_producto_blog">fecha</p>
				      			   
				      			</div>
				      			<div class="content-2">	
                                      <h2><?php the_title(); ?></h2>
                                      <a href="<?php the_permalink();?>">Leer</a>	
				      			</div>
                        </div>
                    </div>
                      
        <?php 
     endwhile; wp_reset_data();

     the_posts_navigation();

    ?>
    </div>

<?php
get_footer();

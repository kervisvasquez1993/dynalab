<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dynalab
 */

get_header();
$taxonomia_actual = get_queried_object();

?>

<div class="hero-page" style="background:url('<?php echo get_template_directory_uri();?>/img/taxonomia.jpg');" >
    <div class="wrap-hero">
         <div class="hero-content">
		    <p class="home">INICIO</p> <p> > </p> <p> ÁREAS TERAPEÚTICAS</p> <p> > </p> <p> PRODUCTOS </p> <p> > </p> <p><?php echo $taxonomia_actual->name; ?></p>
         </div>
         <div class="hero-content-2">
             <h4 class="titulo">
			 <?php echo $taxonomia_actual->name; ?>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>
</header>
	
		<main id="filtrar" class="container">
		 	<div class="menu">
			       <?php $imagen_principal = get_field('img_taxonomia',$taxonomia_actual);
					echo "<a class='iconos_menu' href='#todos'><img src='$imagen_principal'></a>";
					$terms = get_terms( array('taxonomy' => 'categoria-producto',) );
					foreach($terms as $term):
					  $image = get_field('img_taxonomia', $term);
					  echo "<a class='iconos_menu' href='#". $term->slug . "'><img src='$image'></a>";
					endforeach;
				    ?>
			</div>
			<div id="productos" class="container2">
			  <?php
				    foreach($terms as $term):
						    $image = get_field('img_taxonomia', $term);
			                $busqueda = $term->slug;
			                filtrar_productos($busqueda);
			        endforeach;	  				 
                    ?>
			</div>
		</main>
			

<?php   
get_footer();

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
$todo_los_productos = get_page_by_title('PRODUCTOS  DYNALAB');
$todo_los_productos_id = $todo_los_productos->ID;

?>

<div class="hero-page" style="background:url('<?php echo get_template_directory_uri();?>/img/taxonomia.jpg');" >
    <div class="wrap-hero">
         <div class="hero-content">
		    <p class="home"><a href="<?php echo esc_url(home_url('/'));?>">INICIO</a> &gt  <a href="<?php the_permalink($todo_los_productos->ID);?>">  ÁREAS TERAPEÚTICAS</a> &gt <a href="#"> <?php echo $taxonomia_actual->name; ?> </a> </p> 
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

		<main id="filtrar">
		 	<div class="menu" id="menu_filtro">
			       <?php $imagen_principal = get_field('img_taxonomia',$taxonomia_actual);
					echo "<a class='iconos_menu' href='#todos'><img src='$imagen_principal'></a>";
					$terms = get_terms( array('taxonomy' => 'categoria-producto',) );
					foreach($terms as $term):
					  $image = get_field('img_taxonomia', $term);
					  echo "<a class='iconos_menu' href='#". $term->slug . "'><img src='$image'></a>";
					endforeach;
				    ?>
			</div>
			<div class="mostrar_selecionado"></div>
			<div id="productos" class="container_ui">
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

$titulo_dynalab = "CONOCE LAS ÁREAS TERAPÉUTICAS";
$contenido = "Buscamos atender y satisfacer las necesidades del paciente, por ello contamos con un amplio portafolios de medicamentos a usarse en distintas áreas terapéuticas.";
$imagen = "productos.jpg";
$nombre_enlace = "Ver Todos los Productos";
banner_section($titulo_dynalab, $contenido,$imagen, $todo_los_productos_id,$nombre_enlace)?>

<?php   
get_footer();

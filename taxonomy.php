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
$todo_los_productos = get_page_by_title('ÁREAS TERAPÉUTICAS');
$todo_los_productos_id = $todo_los_productos->ID;
$termino_actual = get_queried_object();
//print_r($termino_actual);
$taxonomia = get_taxonomy($termino_actual->taxonomy);
$slug_actual =$termino_actual->slug;
$a;
if($busqueda == '')
{
	$a = 'OR';
}else{
	$a ='AND';
}
			
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'productos',
	'order' => 'ASC',
	'order_by' => 'title',
	'tax_query' => array(
		'relation' => $a,
		[
			'taxonomy'         => 'tipo-Producto',
			'field'            => 'slug',
			'terms'            => $slug_actual,
		],
		[
			'taxonomy'         => 'categoria-producto',
			'field'            => 'slug',
			'terms'            => $busqueda,
		],
	),
  );

?>

<div class="hero-page" style="background:url('<?php echo get_template_directory_uri();?>/img/taxonomia.jpg');" >
    <div class="wrap-hero">
        
         <div class="hero-content-2">
		 <p class="home"><a href="<?php echo esc_url(home_url('/'));?>">INICIO</a> &gt  <a href="<?php the_permalink($todo_los_productos->ID);?>">  ÁREAS TERAPEÚTICAS</a> &gt <a href="#"> <?php echo $taxonomia_actual->name; ?> </a> </p>
             <h4 class="titulo">
			 <?php echo $taxonomia_actual->name; ?>
                 <img src="<?php echo get_template_directory_uri();?>/img/linea-areas-terapeuticas.png" alt="">
             </h4>
             <p class="slogan-title">Comprometidos <spam class="destacado"> Con Tu Salud</spam></p>
             
         </div>
    </div>

</div>
</header>

	<main class="main_block">
		 		<div class="menu" id="menu_filtro">
			       <?php $imagen_principal = get_field('img_taxonomia',$taxonomia_actual);
					$terms = get_terms( array('taxonomy' => 'categoria-producto') );
					$imagen_principal = get_field('img_taxonomia',$taxonomia_actual);?>
					<div class="menu_iconos" data-filter="all">
						<img src='<?php echo $imagen_principal; ?>'>
					</div>
					<?php
					foreach($terms as $term):
					     $image = get_field('img_taxonomia', $term); ?>
					     <div  class="menu_iconos" data-filter="<?php echo $term->term_taxonomy_id;?>">
						 	<img src="<?php echo $image;?>" alt="<?php echo $term->name;?>"> 
						 </div>
						<?php
					endforeach;
				   ?>
				</div>
			
			<div class="mostrar_selecionado"></div>
			<?php
			  $farmaco = new WP_Query($args); 
	          if($farmaco->have_posts()) : ?>
		      <div >
		         <div class="row">
			         <div class="filtro-container">
			        <?php while($farmaco->have_posts()): $farmaco->the_post();?>
				       <?php $terms = wp_get_post_terms(get_the_ID(), 'categoria-producto')?>  
				       <div class="card_wrap filtr-item" data-category="<?php echo $terms[0]->term_taxonomy_id?>">
					   <div class="card">
                            <div class="card-image waves-effect waves-block waves-light" style="
							 border: 3px solid <?php the_field('color');?>;
							 border-radius: 15px 15px 0 0;
							 							 
							 ">
								   <?php the_post_thumbnail('entrda', array('class' => 'activator')); ?>
                            </div>
                            <div class="card-content activator" 
							style="
							  border-top: 3px solid <?php the_field('color');?>;
							 
							"
							>
                               
								  <img  class="contenido-title_blog"  src="<?php the_field('imagen_fondo_producto')?>" alt="">
								   <span class="content_title_card"><?php the_title('<h6>', '</h6>');?><span>
									<p style="color: transparent">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita repellat eos quia delectus illum debitis accusamus inventore commodi saepe ipsa iure possimus at illo labore, quae quam maiores in placeat.</p>
                                 
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
$titulo_dynalab = "CONOCE LAS ÁREAS TERAPÉUTICAS";
$contenido = "Buscamos atender y satisfacer las necesidades del paciente, por ello contamos con un amplio portafolios de medicamentos a usarse en distintas áreas terapéuticas.";
$imagen = "productos.jpg";
$nombre_enlace = "CONOCE LAS ÁREAS TERAPÉUTICAS";
banner_section($titulo_dynalab, $contenido,$imagen, $todo_los_productos_id,$nombre_enlace)?>

<?php   
get_footer();

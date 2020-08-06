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

		

			<header class="page-header">

                
                
			</header><!-- .page-header -->


			
	
		 <div id="filtrar">
		 		<ul class="menu">
			<?php
			
			        $terms = get_terms( array('taxonomy' => 'categoria-producto',) );
			        foreach($terms as $term) {
			          echo "<li><a href='#". $term->slug . "'>" . $term->name ."</a></li>";
			        } echo "<li><a href='#todos'>Todas las categorias </a></li>";
        
			        ?>
			    </ul>


			     <div id="productos">
			         <?php
		                    foreach($terms as $term){
			                	$busqueda = $term->slug;
			                	filtrar_productos($busqueda);
			                	
			                }	  				 
                    ?>
			     </div>

			</div>


				
				
				
				
<?php        
get_footer();

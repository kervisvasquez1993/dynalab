<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dynalab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
            <div class="site-title flex-column alert-primary">
				<div class="header1 header-iconos ">
            	      <span>
				         <img  class="logo-header" src="<?php echo get_stylesheet_directory_uri().'/assets/buscar-header.png';?>" alt="">   
				      </span>
      
				      <div class="children-iconos-header">
      
      
				           <span class="wrapp-icon">
				              <img  class="logo-header" src="<?php echo get_stylesheet_directory_uri().'/assets/telefono-header.png';?>" alt="">
				           	<p class="font-header"> (+58) 424 4444161 </p>
				           </span>
				           
				           
				           <span class="wrapp-icon">
				              <img  class="logo-header" src="<?php echo get_stylesheet_directory_uri().'/assets/correo-header.png';?>" alt="">
				              <p class="font-header"> atencion@dynamics.com </p>
				           </span>
				      </div>

                </div>
				<div class="header2">
				    <?php the_custom_logo();  ?><!-- invocar el logo .site-branding -->
                       <nav id="site-navigation" class="main-navigation">
       
			            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dynalab' ); ?></button>
			       
			       
			                   <?php
			                wp_nav_menu(
			                	array(
			                		'theme_location' => 'menu-1',
			                		'menu_id'        => 'primary-menu',
			                	)
			                );
			            
			                   ?>
				       </nav><!-- #site-navigation -->
				</div>


            	
			</div>
			
		</div> <!--fin de site-branding-->
		
		
		
	</header><!-- #masthead -->

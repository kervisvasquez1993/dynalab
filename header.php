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
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Dynalab">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" href="<?php  echo get_template_directory_uri();?>/img/icono.png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#003663">
	<meta name="application-name" content="Dynalab">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/icono.png" sizes="200x200">
	
	<?php wp_head(); ?>

	<!--<script type='text/javascript'>
        window.smartlook||(function(d) {
        var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
        var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
        c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
        })(document);
        smartlook('init', '46828197f6ca6c4323984c2a3327f1ba66f1e554');
	</script>
	-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>
	
	<header id="masthead" class="site-header">
		<div class="site-branding position-a">
            <div class="site-title flex-column">
				<div class="header1 header-iconos ">
            	      
      
				      <div class="children-iconos-header">
      
					  <span class="wrapp-icon">
				         <img  class="logo-header header-search-button" id="headerSearchButton"   src="<?php echo get_stylesheet_directory_uri().'/assets/buscar-header.png';?>" alt="">   
				      </span>
				           <span class="wrapp-icon z-index-1000">
				              <img  class="logo-header" src="<?php echo get_stylesheet_directory_uri().'/assets/telefono-header.png';?>" alt="">
				           	<p class="font-header"> (+58) 424 - 4143803</p>
				           </span>
				           
				           
				           <span class="wrapp-icon z-index-1000">
				              <img  class="logo-header" src="<?php echo get_stylesheet_directory_uri().'/assets/correo-header.png';?>" alt="">
				              <p class="font-header">cuentasclaves@dynamics.life</p>
				           </span>
				      </div>

                </div>
				<div class="header2 position-a z-index-1000">
					<a href="<?php echo esc_url(home_url('/'));?>" class="custom-log-link">
					    <img  class="custom-logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo de dyanlab">
					</a>
				</div>
            </div>
		</div>
		
		<nav>
    <div class="nav-wrapper">
   
	    <?php 
            wp_nav_menu(
       		           array(
       		             'theme_location' => 'menu-1',
       		             'menu_class' => 'right hide-on-med-and-down myriad z-index-1000',
       		             'container' => 'ul',
       		             'container_class' => 'test1 myriad z-index-1000'
       		                             	)
       		           );
 
        ?>
     
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  
   <?php 
     wp_nav_menu(
		array(
		  'theme_location' => 'menu-1',
		  'menu_id'        => 'mobile-demo',
		  'menu_class' => 'sidenav z-index-1000',
		  'container' => 'ul',
		  'container_class' => 'test1'
		                  	)
		);
 
   ?>
  
		
		<!--fin de site-branding-->
		<!-- #masthead -->

		<?php
		
		
		               
		?>
		
		<div id="searchArea">
			<?php get_search_form();?>
            <button class="material-icons red btn-small search-submit" id="closeSearchButton">
			        highlight_off
            </button>
		</div>

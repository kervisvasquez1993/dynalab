<?php
/**
 *Template Name: Buscador
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dynalab
 */

get_header();
?>

	<main id="primary" class="site-main">
            <h2>Buscador avanzado</h2>
            <div class="buscador">
                <input type="text" name="buscar" id="buscar" placeholder="Buscar productos">
                <button id="btn_buscar" type="buttom" class="button">Buscar</button>
            </div>
	
	</main>
<?php

get_footer();

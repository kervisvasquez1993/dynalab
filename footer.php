<footer id="colophon" class="site-footer footer maquetacion-footer">
<div class="flex-footer">	 
    <div class="menu-footer z-index-1000">
        <?php 
             wp_nav_menu(
                  array(
                    'theme_location' => 'menu-1',
                    'menu_class' => 'right hide-on-med-and-down  menu_footer_',
                    'container' => 'ul',
                    'container_class' => 'test1'
                                    	)
                  );
             ?>
     </div>
     <div class="contacto-footer">
     	<article class="footer-1 z-index-1000">
		<div>
		    <h6 class="suscribete">
		    	SUSCRÍBETE
		    </h6>
		    
		</div>
		<!--Formullario de contacto -->
		 
		<?php echo do_shortcode('[contact-form-7 id="568" title="suscripción"]'); ?>
		<!--fin-->
     	</article>
     	<article class="footer-2">

		<div class="contact-1">
		    <div class="footer-contacto">
		    	<h4 class="titulo">CONTACTO</h4>
    
		    </div>
		    <div class="footer-logo">
		    		<div class="icono-contactos">
<<<<<<< HEAD
=======
		    			<img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/telefono-footer.png" alt="">
		    			<p>(+58)424-4143803</p>
		    		</div>
		    		<div class="icono-contactos">
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
		    		    <img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/correo-footer.png" alt="">
		    			<p>cuentasclaves@dynamics.life</p>
		    		</div>
		    		<div class="icono-contactos">
		    		    <img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/reloj-footer.png" alt="">
						
						<div>
							<p>Lunes a Viernes 8:00 am a 5:00 pm</p>
                        </div>
		    		</div>
    
		    		<div class="icono-contactos">
		    		    <img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/ubicacion-footer.png" alt="">
		    			<p>Valencia, Carabobo, Venezuela</p>
		    		</div>
		    </div>
		</div>
		<div class="contact-2">
		   <img loading="lazy" class="icono-logo" src="<?php echo get_template_directory_uri();?>/img/footer-icono/logo-footer.png" alt="">
		</div>
		
     	</article>
	 </div>
	 
</div>

<div class="footer_piliticas">
<<<<<<< HEAD
	<span class="enlaces_politicas z-index-1000">
		<?php $privacidad = get_page_by_title('Política de privacidad');?>
		<p class="politicas1">  <a href="<?php the_permalink($privacidad->ID);?>"> Politicas de Privacidad  </a> </p>
	</span>
	<span class="footer-4">
		<p> Última actualización 07/04/2020 </p>
		
		<p> &copy Dynalab. Todos los Derechos Reservados</p>
	</span>
=======
	<article class="enlaces_politicas z-index-1000">
		<?php $privacidad = get_page_by_title('Política de privacidad');?>
		<p class="politicas1">  <a href="<?php the_permalink($privacidad->ID);?>"> Politicas de Privacidad  </a> </p>
	</article>
	<article class="footer-4">
		<p> Última actualización 07/04/2020 </p>
		<p class="derecho-none"> | </p>
		<p> &copy Dynalab. Todos los Derechos Reservados</p>
	</article>
>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
</div>	

	<?php wp_footer(); ?>

<<<<<<< HEAD
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147284475-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147284475-8');
</script>
-->
=======

>>>>>>> 6b1d4b778072f1a7995f4bb5d1f6c13cc45ae94f
</footer>
</body>
</html>


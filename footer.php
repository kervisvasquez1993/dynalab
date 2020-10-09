<footer id="colophon" class="site-footer maquetacion-footer">
<div class="flex-footer">	 
    <div class="menu-footer">
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
     	<article class="footer-1">
		<div>
		    <h6 class="suscribete">
		    	SUSCRÍBETE A NUESTRO BLOG
		    </h6>
		    <p class="footer-content">Cada dos meses haremos una selección de lo más destacado para ti</p>
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
		    			<img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/telefono-footer.png" alt="">
		    			<p>(+58) 294 000 000</p>
		    		</div>
		    		<div class="icono-contactos">
		    		    <img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/correo-footer.png" alt="">
		    			<p>atencion@dynamics.com</p>
		    		</div>
		    		<div class="icono-contactos">
		    		    <img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/reloj-footer.png" alt="">
						
						<div>
							<p>Lunes a Viernes</p>
						    <p>8:00 am a 5:00 pm</p>
                        </div>
		    		</div>
    
		    		<div class="icono-contactos">
		    		    <img  class="icono" src="<?php echo get_template_directory_uri();?>/img/footer-icono/ubicacion-footer.png" alt="">
		    			<p>Valencia, Carabobo, Venezuela</p>
		    		</div>
		    </div>
		</div>
		<div class="contact-2">
		   <img  class="icono-logo" src="<?php echo get_template_directory_uri();?>/img/footer-icono/logo-footer.png" alt="">
		</div>
		
     	</article>
	 </div>
	 
</div>
	<article class="footer-3">
		<a href="#"> Privacidad</a>
		<a href="#"> Aviso Legal</a>
		<a href="#">Política de Cookies</a>
	</article>
	<article class="footer-4">
		<p> Última actualización 07/04/2020 </p>
		<p class="derecho-none"> | </p>
		<p> &copy Dynamics. Todos los derechos reservados</p>
	</article>
		
</footer>


<?php wp_footer(); ?>

<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147284475-8"></script>
<script type='text/javascript'>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-147284475-8');
</script>
-->
</body>
</html>


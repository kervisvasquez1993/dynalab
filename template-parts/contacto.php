<?php 
/**
 * Template Name: Contacto
 * 
 * 
 */
$iconos = get_post_meta( get_the_ID(), 'campos_repetidos', true );
$terapeutica = get_page_by_title('ÁREAS TERAPÉUTICAS');

 get_header();
 contenido_hero();
?>


</header>

<main id="primary" class="site-main">
    <div class="container">
        
                <?php foreach($iconos as $icono):?>
                    <div class="p-4">
                      <div class="row">
                         <div class="col-6 col-6">
                            <img class="imagen-card" src="<?php echo $icono[image]?>">
                         </div> 
                         <div class="col-6 col-6">
                             <p class="descripcion_contacto"><?php  echo $icono[description] ?></p>
                          </div>
                    </div>
                    </div>
               <?php endforeach;?> 
        
            
    
   </div>
   <section class="flex-center-column section-info-front" style=" 
background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
background-position: center center;
	  background-repeat: no-repeat;
	  background-size: cover;
">
     <div class="margin-top-10 ">
          <h3 class="text-center">Dynalab</h3>
          <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores repudiandae ipsum aut vel voluptate voluptatem.</p>
      </div>
     <a href="<?php the_permalink(16);?>" class="btn btn-primary btn-padiing">REPORTAR MEDICAMENTO</a> 
</section>

<h1>hola</h1>

<section class="flex-center-column section-info-front" style=" 
background: url('<?php echo get_template_directory_uri();?>/img/img1.jpg');
background-position: center center;
	  background-repeat: no-repeat;
	  background-size: cover;
">
     <div class="margin-top-10 ">
          <h3 class="text-center">Dynalab</h3>
          <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores repudiandae ipsum aut vel voluptate voluptatem.</p>
      </div>
     <a href="<?php the_permalink($terapeutica->ID);?>" class="btn btn-primary btn-padiing">CONOCES LAS ÁREAS TERAPÉUTICAS</a> 
</section>


    
</main><!-- #main -->

<?php get_footer();?>
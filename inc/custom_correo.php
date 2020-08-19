<?php 
function scripts_admin()
{ 
    wp_register_script('scripts_admin',get_template_directory_uri().'/js/contact_form_admin.js',array('jquery'),'1.0.0', true);
    wp_enqueue_script('scripts_admin');

    // cargar informacion desde php a js
    wp_localize_script(
        'scripts_admin',
        'contact_form',
        array('name' => 'Modulo de Comentario de Contacto','ajax_url' => admin_url('admin-ajax.php'))
    );
}
add_action('admin_enqueue_scripts','scripts_admin');


function contact_form_delete()
{
    if(isset($_POST['id'])):
        global $wpdb;
        $table = $wpdb->prefix.'contacto';
        $delete_row = $wpdb->delete($table, array('id' => $_POST['id']), array('%d'));
        if($delete_row)
        {
            $reponse = array(
                'err' => false,
                'msg' => 'Se elimino el comentario con el ID '. $_POST['id']
            );  
        }
        else
        {
            $reponse = array(
                'err' => true,
                'msg' => 'No se elimino el comentario con el ID '. $_POST['id']
            );  
        }
        die(json_encode($reponse));
    endif;    
}
add_action( 'wp_ajax_contact_form_delete', 'contact_form_delete' );
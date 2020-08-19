<?php

function dynalab_ajustes(){
    add_menu_page('Contactos', 'suscripción','administrator','dynalab_ajustes','contacto_icono','dashicons-id-alt',20);
    
}

add_action('admin_menu','dynalab_ajustes');

function contacto_icono()
{
    ?>
    <div class="wrap">
        <h1>Contacto</h1>
        <table class="wp-list-table widefat striped">
            <thead>
            <tr>
                <th class="manage-column">ID</th>
                <th class="manage-column">email</th>
                
            </tr>
            </thead>
            <tbody>

            <?php
            global $wpdb;
            $contacto = $wpdb->prefix.'contacto';
            $registros = $wpdb->get_results("SELECT * FROM $contacto", ARRAY_A);
            foreach ($registros as $registro){

                ?>

                <tr>
                    <td><?php echo $registro['id'];?></td>
                    <td><?php echo $registro['email'];?></td>
                    <td>
                        <a href="#" class="u-delete" data-contact-id="<?php echo $registro['id']?>">Eliminar</a>
                    </td>
                </tr>
                

            <?php }?>
            </tbody>

        </table>
    </div>
    <?php

}


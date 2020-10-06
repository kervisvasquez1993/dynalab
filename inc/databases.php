<?php
function surgery_d(){
    global $wpdb;
    global $dynalab_dbversion;
    $dynalab_dbversion = '1';
    $tabla = $wpdb->prefix.'contacto';
    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $tabla (
        id mediumint(9) not null auto_increment,
        email varchar(50) NOT NULL,
        primary key (id)) $charset; ";

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
    add_option('dynalab_dbversion', $dynalab_dbversion);
    //actualizar en caso de ser necesario

    $version_actual = get_option( 'dynalab_dbversion');
    if($dynalab_dbversion != $version_actual){
        $tabla = $wpdb->prefix.'contacto';

        $sql = "CREATE TABLE $tabla (
        id mediumint(9) not null auto_increment,
        email varchar(50) NOT NULL,
        primary key (id)) $charset; ";
        require_once(ABSPATH. 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
        update_option( 'dynalab_dbversion', $dynalab_dbversion );
    }
}

add_action('after_setup_theme', 'surgery_d');

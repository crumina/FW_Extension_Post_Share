<?php

$ext = fw_ext( 'post-share' );

if ( !is_admin() ) {
    wp_enqueue_style( 'post-share', $ext->locate_URI( '/static/css/styles.css' ), array(), $ext->manifest->get_version() );
    wp_enqueue_script( 'post-share', $ext->locate_URI( '/static/js/scripts.js' ), array(), $ext->manifest->get_version(), true );

    $config              = $ext->get_config();
    $config[ 'ajaxUrl' ] = admin_url( 'admin-ajax.php' );

    wp_localize_script( 'post-share', 'postShareConfig', $config );
} else {
    wp_enqueue_style( 'post-share-admin', $ext->locate_URI( '/static/css/admin.css' ), array(), $ext->manifest->get_version() );
}
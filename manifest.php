<?php

if ( !defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest[ 'name' ]         = esc_html__( 'Post Share', 'crumina' );
$manifest[ 'description' ]  = esc_html__( 'Post Share.', 'crumina' );
$manifest[ 'github_repo' ]  = 'https://github.com/crumina/FW_Extension_Post_Share';
$manifest[ 'version' ]      = '1.0.10';
$manifest[ 'thumbnail' ]    = plugins_url( 'unyson/framework/extensions/post-share/static/img/thumbnail.png' );
$manifest[ 'display' ]      = true;
$manifest[ 'standalone' ]   = true;
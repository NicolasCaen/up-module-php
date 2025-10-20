<?php

/**
 * Slug: register-slick
 * Nom: Register Slick Carousel
 * Description: Enregistre les assets Slick (CSS/JS) via wp_register_style/wp_register_script.
 * Version: 1.0.0
 * Catégories: Frontend, Carousel
 * Type: php
 * Install: php=functions/php
 */

add_action( 'wp_enqueue_scripts', 'up_register_slickjs' );
function up_register_slickjs(){
	wp_register_style('slick-css','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
	wp_register_script('slick-js','//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);
}

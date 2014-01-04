<?php 

/* 
FUNZIONI PER BOOTMANIA 
le chiamate alle funzioni sono in fondo
*/

// WP Bootstrap Navwalker - https://github.com/twittem/wp-bootstrap-navwalker
require_once('php/wp_bootstrap_navwalker.php');

// Carica il CSS di Bootstrap
function caricaBScss_BM(){
	wp_enqueue_style('bs', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.0.3', 'screen');
}

// Carica il JS di Bootstrap
function caricaBSjs_BM(){
	wp_register_script('bs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.3', true);
	wp_enqueue_script('bs');
}

// Carica la versione di jQuery inclusa con il tema
function caricajQuery_BM(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.0.3.min.js', false, '2.0.3', true );
	wp_enqueue_script('jquery');
}

// Definisce i widget nella barra laterale
function widgetBarraLaterale(){
	register_sidebar(array(
		'name' => 'Barra laterale',
		'description' => 'I widget nella barra di destra, se presente',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	)); 
}

// Registro la navigazione principale
function regNavPrincipale(){
	register_nav_menu('principale','Navigazione principale');
}

// Azioni
add_action('wp_enqueue_scripts','caricaBScss_BM');
add_action('wp_enqueue_scripts','caricaBSjs_BM');
add_action('wp_enqueue_scripts','caricajQuery_BM');
add_action('widgets_init','widgetBarraLaterale');
add_action('init','regNavPrincipale');

?>
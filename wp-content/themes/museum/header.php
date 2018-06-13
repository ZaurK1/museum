<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container container-fix">
	      <div class="row header">
		      <div class="col-md-12">
			      <img src="<?php echo get_stylesheet_directory_uri()?>/img/header1.jpg">
				  <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri()?>/img/header2.jpg"></a>
		          <img src="<?php echo get_stylesheet_directory_uri()?>/img/header3.jpg">
		      </div>
		
		  </div>
		 <div class="row">
			    <div class="col-md-12">  
				
                  <?php wp_nav_menu(array(
	'menu' => 'Main Menu', 
	'container_id' => 'cssmenu', 
	'walker' => new CSS_Menu_Walker()
)); ?>
				   
			    </div>
		</div>
				


<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wolppp
 */
?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php the_title(); ?> | WOLPPP</title>
	<meta name="description" content="Effect inspiration for opening an image grid item." />
	<meta name="keywords" content="image grid, effect, inspiration, css, javascript, animation, masonry" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/style.css" />

	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<header>
           <div class="logo"><img src="<?php echo get_template_directory_uri() ?>/img/wolppplogo_big.png" /></div>
           <nav class="codrops-demos">
				<?php    /**
					* Displays a navigation menu
					* @param array $args Arguments
					*/
					$args = array(
						'theme_location' => '',
						'menu' => '',
						'container' => 'nav',
						'container_class' => 'menu-{menu-slug}-container',
						'container_id' => '',
						'menu_class' => 'menu',
						'menu_id' => '',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => ''
					);

					wp_nav_menu( $args ); ?>
			</nav>
        </header>
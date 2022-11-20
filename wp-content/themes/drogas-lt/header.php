<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drogas.lt
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="page" class="site" >
		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container-fluid" >
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo esc_url( home_url( '/images/Drogas.png' ) ); ?>" width="150" height="250"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
<?php
	wp_nav_menu(
		array(
			'theme_location'   => 'menu-top',
			'depth'            => 2,
			'container'		   => 'div',
			'container_class'  => 'collapse justify-content-end navbar-collapse',
			'container_id'     => 'navbarSupportedContent',
			'menu_class'       => 'navbar-nav',
			'fallback_cb'      => 'WP_Bootstrap_Navwalker::fallback',
			'walker'           => new WP_Bootstrap_Navwalker(),
		)
	);
?>
   
  </div>
</nav>
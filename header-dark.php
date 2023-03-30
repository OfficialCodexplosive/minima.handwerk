<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package handwerk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bordahn-handwerk' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation dark">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary',
				)
			);
			?>
			<a href="<?php echo site_url(); ?>"><div class="short-logo">G. BORDAHN</div></a>
			<button class="togglebtn" onclick="toggleNav()"></button>
		</nav><!-- #site-navigation -->
		<div id="replacement-header">
			<a href="<?php echo get_permalink( get_page_by_path( 'kontakt' ) ) ?>"><span>ZUM<br>KONTAKT-<br>FORMULAR</span></a>
		</div>
	</header><!-- #masthead -->

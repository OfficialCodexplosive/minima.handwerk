<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package handwerk
 */

get_header( 'dark' );
?>

	<main id="primary" class="site-default">
		<h2 class="boldq">Sie haben eine Seite gefunden, die nicht existiert!</h2>
		<h4>Vielleicht haben Sie sich verlaufen?<br><a href="<?php echo site_url(); ?>">Hier</a> kommen Sie zurück zur Hauptseite.</h4>
	</main><!-- #main -->

<?php

get_footer();

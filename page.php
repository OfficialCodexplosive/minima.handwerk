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
		<h1 class="boldq"><?php the_title(); ?></h1>
		<p><?php the_content(); ?></p>
	</main><!-- #main -->

<?php

get_footer();

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package handwerk
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section id="landing">
            <div id="fullsize-img"></div>
            <div class="center vertical horizontal fullwidth">
                <p class="boldq white">ENTRÜMPELUNG<br><span id="small">- & -</span><br>HAUSHALTSAUFLÖSUNG</p>
            </div>
        </section>
        <section id="services">
            <div class="center horizontal fullwidth">
                <div class="header">
                    <h3>UNSER LEISTUNGSSPEKTRUM</h3>
                </div>
                <div class="content">
                    <div class="slider-wrapper">
                        <button class="slide-arrow" id="slide-arrow-prev">&#8249;</button>
                        <button class="slide-arrow" id="slide-arrow-next">&#8250;</button>
                        <!--<button class="slide-arrow" id="stats" style="margin-top: 50px;">ABCD</button>-->
                        <ul class="slides-container" id="slides-container">
                                <li class="slide invisible" style="background: orange;"></li>
                                <li class="slide">
                                    <h1 class="boldq black">GARTENARBEIT</h1>
                                    <div class="slide-img"></div>
                                </li>
                                <li class="slide">
                                    <h1 class="boldq black">ENTRÜMPELUNG</h1>
                                    <div class="slide-img"></div>
                                </li>
                                <li class="slide">
                                    <h1 class="boldq black">HAUSAUFLÖSUNG</h1>
                                    <div class="slide-img"></div>
                                </li>
                                <li class="slide invisible" style="background: orange;"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--
		< ?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text">< ?php single_post_title(); ?></h1>
				</header>
				< ?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?> -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

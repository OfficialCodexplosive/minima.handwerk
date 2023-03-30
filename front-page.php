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
                <p class="boldq white large-disp">ENTRÜMPELUNG<br><span id="small">- & -</span><br>HAUSHALTSAUFLÖSUNG</p>
                <p class="boldq white small-disp">ENTRÜMPELUNG<span id="small">&</span><br>HAUSHALTSAUF-<br>LÖSUNG</p>
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
                                    <div class="slide-img">
                                        <img/>
                                    </div>
                                </li>
                                <li class="slide">
                                    <h1 class="boldq black">ENTRÜMPELUNG</h1>
                                    <div class="slide-img">
                                        <img/>
                                    </div>
                                </li>
                                <li class="slide">
                                    <h1 class="boldq black">HAUSAUFLÖSUNG</h1>
                                    <div class="slide-img">
                                        <img/>
                                    </div>
                                </li>
                                <li class="slide invisible" style="background: orange;"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="how-it-works">
            <div class="center horizontal fullwidth">
                <div class="header">
                    <h3>SO FUNKTIONIERT'S</h3>
                    <h1 class="boldq black">ZUVERLÄSSIG & UNKOMPLIZIERT</h3>
                </div>
                <div class="content">
                    <table>
                        <colgroup>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <td>Besichtigung</td>
                                <td>einfach anrufen oder unser Kontaktformular verwenden und einen Besichtigungstermin auszumachen und die Einzelheiten der Entrümpelung zu besprechen.</td>
                                <td><a href="<?php echo get_permalink( get_page_by_path( 'kontakt' ) ) ?>">ZUM KONTAKT</a></td>
                                
                            </tr>
                            <tr>
                                <td>Angebot</td>
                                <td>wir erstellen Ihnen kurz darauf ein Angebot, das Kosten, Gebühren und Arbeitsstunden für die Entrümpelung enthält.</td>
                                <td><!--<a href="< ?php echo get_permalink( get_page_by_path( 'kontakt' ) ) ?>">ZUM KONTAKT</a>--></td>
                            </tr>
                            <tr>
                                <td>Entrümpelung</td>
                                <td>wenn Sie mit dem Angebot einverstanden sind, kann die Entrümpelung beginnen!</td>
                                <td><a href="<?php echo get_permalink( get_page_by_path( 'referenzen' ) ) ?>">ZU DEN REFERENZEN</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section id="before-after">
            <div id="fullsize-img"></div>
            <div class="center fullwidth">
                <div class="header">
                    <h3>VORHER - NACHHER</h3>
                    <h1 class="boldq white">ÜBERZEUGEN SIE SICH<br>SELBST VON UNSERER ARBEIT!</h3>
                </div>
                <div class="content">
                    <a href="<?php echo get_permalink( get_page_by_title( 'referenzen' ) ) ?>">ZUR BILDERSTRECKE</a>
                </div>
            </div>
        </section>
        <section id="contact">
            <div id="fullsize-img"></div>
            <div class="center horizontal fullwidth">
                <div class="header">
                    <h3>KONTAKT</h3>
                    <h1 class="boldq white">NOCH FRAGEN?</h3>
                </div>
                <div class="content">
                    <h2>Kontaktieren Sie uns!</h2>
                    <h4 class="boldq white">+49 221 47-10-4146</h4>
                    <div class="links">
                        <a href="mailto:___@___.de">E-MAIL SCHREIBEN</a>
                        <a href="<?php echo get_permalink( get_page_by_path( 'kontakt' ) ) ?>">KONTAKTFORMULAR</a>
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
get_footer();

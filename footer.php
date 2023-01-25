<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package handwerk
 */

?>

	<footer id="colophon" class="site-footer">
		<div id="fullsize-img"></div>
		<div class="footer-separation">
			<div class="line"><span><div class="logo"></div></span></div>
		</div>
		<div class="page-footer">
			<div class="nav">
				<h5>NAVIGATION</h5>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer',
					)
				);
				?>
			</div>
			<div class="scheduler">
				<a href="#"><span>ZUM<br>TERMIN-<br>PLANER</span></a>
			</div>
			<div class="legal">
				<h5>RECHTLICHES</h5>
				<ul>
					<li><a href="#">Datenschutz</a></li>
					<li><a href="#">Impressum</a></li>
					<li style="content: ''; height: 1em; width: 100%;"></li>
					<li>&#169; Einige Rechte vorbehalten.</li>
				</ul>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bordahn-handwerk' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %s', 'bordahn-handwerk' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bordahn-handwerk' ), 'minima.handwerk', 'MEDIENMANUFAKTUR Schönau' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

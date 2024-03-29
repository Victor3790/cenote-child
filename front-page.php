<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cenote
 */

$archive_layout = get_theme_mod( 'cenote_archive_style', 'tg-archive-style--masonry' );
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div id="about">
				<div>
					<h2>Quiénes somos</h2>
					<p>
						Somos una empresa mexicana fabricante de calzado para dama, nuestra misión
						es brindar a nuestros clientes zapatos de moda de la más alta calidad a
						precios inigualables. En Calzado Karla Van estamos convencidos de que lo
						hecho en México es sinonimo de calidad por lo que todos nuestros productos están
						hechos por manos 100% mexicanas.
					</p>
				</div>
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/calzado.jpg" alt="Calzado para dama.">
				</div>
			</div>
			<div id="models">
				<h2>Nuestros modelos</h2>
				<?php echo do_shortcode('[gallery category="catalogo"  size="medium" link="none"]'); ?>
				<div class="buttonContainer">
					<div class="customButton">
						<a href="<?php echo esc_url( home_url( '/modelos' ) );?>">Ver más modelos</a>
					</div>
					<div class="customButton">
						<a href="#">Comprar</a href="#">
					</div>
				</div>
			</div>
			<div id="contact">
				<h2>Contáctanos</h2>
				<h5>Para ventas al mayoreo:</h5>
				<p>ventas@calzadokarlavan.com</p>
				<h5>Para cualquier aclaración:</h5>
				<p>hola@calzadokarlavan.com</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

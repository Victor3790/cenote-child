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
				<h2>Quiénes somos</h2>
				<p>
					Somos una empresa mexicana fabricante de calzado para dama, nuestra misión
					es brindar a nuestros clientes zapatos de moda de la más alta calidad a
					precios inigualables. En Calzado Karla Van estamos convencidos de que lo
					hecho en México es sinonimo de calidad por lo que todos nuestros productos están
					hechos por manos 100% mexicanas.
				</p>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/calzado.jpg" alt="Calzado para dama.">
			</div>
			<div id="models">
				<h2>Nuestros modelos</h2>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

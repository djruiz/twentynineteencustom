<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div id="posts" class="col s8 left-align">
		<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content-excerpt' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>
		</main><!-- .site-main -->
	</section><!-- .content-area -->
		</div>
		<div id="sidebar" class="col s4">
			<?php
				//get_template_part( 'template-parts/footer/footer', 'widgets' );
				get_template_part('template-parts/sidebar/sidebar');
			?>
		</div>
	</div>
</div>

	

<?php
get_footer();
?>
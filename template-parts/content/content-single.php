<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
	<header class="entry-header">
		<?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
	</header>
	<?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col l8 s12 bullet">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
			<div id="sidebar" style="" class="col l4 s12">
				<?php
					//get_template_part( 'template-parts/footer/footer', 'widgets' );
					get_template_part('template-parts/sidebar/sidebar');
				?>
			</div>
		</div>
			</div>

	<footer class="entry-footer">
		<?php twentynineteen_entry_footer(); ?>
	</footer><!-- .entry-footer -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>
<style>
#content {
	margin-top: 0;
}
body main a {
	color: hsl( 115, 100%, 33% ) !important;
	
}

h2 {
	font-size: 1.5rem;
}
</style>
</article><!-- #post-<?php the_ID(); ?> -->

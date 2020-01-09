<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php //get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php if ( ! empty( $blog_info ) ) : ?>
				<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<?php endif; ?>
			
			</a>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
				<a href="https://www.linkedin.com/company/content-cucumber" class="fa fa-linkedin"></a>
				<a href="https://www.facebook.com/CucumberContent/" class="fa fa-facebook"></a>
				<a href="https://twitter.com/contentcucumber?lang=en" class="fa fa-twitter"></a>
				<a href="https://www.instagram.com/contentcucumber/?hl=en" class="fa fa-instagram"></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<style>body {
        font-family: 'GlacialIndifferenceRegular';
    }

    section#recent-posts-2.widget.widget_recent_entries ul li a {
        color: green !important;
    }
    
    section#archives-2.widget.widget_archive ul li a {
        color: green !important;
    }
    section#meta-2.widget.widget_meta ul li a {
        color: green !important;
    }
</style>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

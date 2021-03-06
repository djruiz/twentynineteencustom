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
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>
<div class="container">
	<div class="row">
		<div id="posts" style="margin-top: 25px" class="col  m8 s12 left-align">
		<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
echo '<h1>testing</h1>';
echo get_template_directory_uri();?>/fonts/
<?php echo get_template_directory_uri();?>/fonts/GlacialIndifference-Regular.otf

		<?php
		$i = 0;
		if ( have_posts() ) {
			
			// Load posts loop.
			while ( have_posts() && $i < 5) {
				the_post();
				get_template_part( 'template-parts/content/content-excerpt' );
				$i++;
			}

			?>
			<div style="padding: 1px; margin: 10px 0;" class="divider"></div>
			<div style="padding: 1px; margin: 10px 0;" class="divider"></div>
			<?php
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
		<div id="sidebar" style="margin-top: 25px;" class="col m4 s12">
			<?php
				//get_template_part( 'template-parts/footer/footer', 'widgets' );
				get_template_part('template-parts/sidebar/sidebar');
			?>
		</div>
	</div>


<style>



</style>
	

<?php
get_footer();
?>

</div>
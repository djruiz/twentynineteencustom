<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
      </script>
	</head>
	
<div class="navigation green darken-2">
		<div style="margin-left: 20px;" class="toggle-icon">
		<a href="http://localhost/wordpress/" class="">
			<a href="#" class="sidenav-trigger" data-target="mobile-nav">
				<i style="text-decoration: none;" class="white-text material-icons medium">menu</i>
			</a>
		</div>
		<div class="">
		<!-- <img class="img-logo" src="http://localhost/wordpress/wp-content/uploads/2019/12/CC-Logo-with-Words.png" style="margin: 10px; width: 250px; height: 100px;" alt="">-->
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
			echo '<img class="site-logo" src="' . esc_url( $custom_logo_url ) . '" style="margin: 10px; width: 250px; height: 100px;"alt="">';?>
		</a>
		</div>
		<div class="nav-links">

			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
			<nav id="site-navigation" class="site-nav" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
			<?php
				wp_nav_menu(
					array(
						'theme_location' => '',
						'menu_class'     => '',
						'link_before'    => '',
						'link_after'     => '',
						'depth'          => 1,
						'container'      => 'ul',
						'container_class' => 'right hide-on-med-and-down',
						'items_wrap'      =>'<ul id="%1$s" class="white-text">%3$s</ul>'

					)
				);
			?>
			<?php endif; ?>
		</div>
</div>

<style>

.navigation {
	display: flex;
	justify-content: space-between;
	align-items: center;
}


</style>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		

<style>
.site-ul {
	margin: 0;
	padding: 0;
}
.site-nav ul:before, .site_nav ul:after { content: ""; display table; }
.site-nav ul:after{ clear: both; }
.site-nav ul { *zoom: 1; }

.site-nav ul li {
	list-style: none;
	float: right;
	color: white;
	

}
.menu-item {
	font-size: 20px;
}
nav ul a {
	  font-size: 20px !important;
	  font-family: 'GlacialIndifferenceRegular';
	}
	
.toggle-icon {
	display: none;
}

/*
@media screen and (max-width: 1024px) {   .div1 { display: none; } }
 */
@media screen and (max-width: 992px){    
	#site-navigation { display: none; }
	.toggle-icon { display: inline; }
	.nav-links { display: none; }
}

@media screen and (max-width: 530px){    
	
	nav.navbar-fixed.green.darken-2 {
		height: 100px !important;
	}
}


/*
@media screen and (min-width: 824px) {    #site-naviation { display: none; } }
 */


a, a:visited, .main-navigation .main-menu > li, .main-navigation ul.main-menu > li > a, .post-navigation .post-title, .entry .entry-meta a:hover, .entry .entry-footer a:hover, .entry .entry-content .more-link:hover, .main-navigation .main-menu > li > a + svg, .comment .comment-metadata > a:hover, .comment .comment-metadata .comment-edit-link:hover, #colophon .site-info a:hover, .widget a, .entry .entry-content .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color), .entry .entry-content > .has-primary-color, .entry .entry-content > *[class^="wp-block-"] .has-primary-color, .entry .entry-content > *[class^="wp-block-"].is-style-solid-color blockquote.has-primary-color, .entry .entry-content > *[class^="wp-block-"].is-style-solid-color blockquote.has-primary-color p {
	color: white;
	text-decoration: none !important;
}

#content {
	margin-top: 125px;
}

/*
ul#menu-header-1.white-text {
	margin-top: 50px;
}
*/
</style>

<ul class="sidenav" id="mobile-nav">
	<!--
	    <li><a href="http://localhost/wordpress/">Home</a></li>
			<li><a href="ttp://localhost/wordpress/blog/">Blog</a></li>
			<li><a href="http://localhost/wordpress/pricing/test/">Pricing</a></li>
			<li><a href="http://localhost/wordpress/affiliates/">Affiliates</a></li>
			<li><a href="#">Meet the team</a></li>
	-->
	<?php
	wp_nav_menu(
				array(
					'theme_location' => '',
					'menu_class'     => '',
					'link_before'    => '',
					'link_after'     => '',
					'depth'          => 1,
					'container'      => 'ul',
					'container_class' => 'right hide-on-med-and-down',
					'items_wrap'      =>'<ul id="%1$s" class="white-text">%3$s</ul>'

				)
			);
			?>
</ul>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <style>
			.sidenav a:hover{
					color: black !important;
			}

			nav.navigation.pagination {
				background: none;
				color: black;
			}
			a.page-numbers {
				color: black;
			}
		
			ul li.cat-item a {
				color: green;
			}
   </style>
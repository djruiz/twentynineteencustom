<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
<div style="margin: 10px 0;" class="divider"></div>
<div style="margin: 10px 0;" class="post">
	<div class="row" style="">
		<div class="col l6 m12 post-image">
			<a href="<?php echo get_permalink()?>">
				<img style="width: 100%; margin: 1.52rem 0 .912rem 0;" src="<?php the_post_thumbnail_url()?>" alt="">
			</a>
		</div>
		<div class="col l6 m12 blog-info">
			<a href="<?php echo get_permalink() ?>">
				<h4 class="green-text"><?php the_title() ?></h4>
			</a> Categories:
				<?php
					$categories = get_the_category();
					foreach($categories as $category){
						//echo $category->name; //category name
						$cat_link = get_category_link($category->cat_ID);
						echo '<a class="green-text left-align" href="'.$cat_link.'">'.$category->name.'</a>  '; // category link
					 }
					 echo "<br>Published ";
					 the_date();
					 echo "<p>Written by " . get_the_author() . "</p>";
					 the_excerpt();
					 
				?>
				
		</div>
	</div>
</div>

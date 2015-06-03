<?php
/**
 * The default template part for displaying content.
 *
 * @package Shrake
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	sam
	<div class="entry-inside">
		 
		<header class="entry-header">
			<?php the_title(); ?>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

 

			<footer class="entry-footer">
 
			</footer>

		 
	</div>
</article>

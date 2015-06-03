<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Shrake
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'templates/parts/content', get_post_format() ); ?>

		<?php comments_template( '', true ); ?>


	<?php endwhile; ?>

</main>

<?php
get_footer();

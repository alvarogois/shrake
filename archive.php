<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shrake
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title" itemprop="headline">', '</h1>' ); ?>
			<?php the_archive_description( '<div class="page-content" itemprop="text">', '</div>' ); ?>
		</header>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'templates/parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php shrake_content_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'templates/parts/content', 'none' ); ?>

	<?php endif; ?>

</main>

<?php
get_footer();

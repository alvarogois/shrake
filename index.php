<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shrake
 * @since 1.0.0
 */

get_header();
?>

<main id="primary" class="content-area" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

	<h3 class="hero">We'll help you find a home you'll love. St. John's and surrounding areas. You're a call away from your dream home.</h3>

	<h3 class="section-heading">Latest listings:</h3>
	<div class="apartments">

		<?php
		$apartment_args = array( 
			'post_type' => 'apartments',
			'order' => 'ASC',
			'orderby' => 'menu_order'
			);

		$apartments = new WP_Query( $apartment_args );
		?>

		<?php while ($apartments->have_posts()) : $apartments->the_post(); ?>
			<div class="apartment">
				
				<div class="featured-image">
					<a href="<?php the_permalink(); ?>">
						<?php 
						if ( has_post_thumbnail() ) {
							the_post_thumbnail('homepage-featured-thumb');
						} else { ?>
						<img class="featured-img featured-backup" src="<?php echo get_template_directory_uri();?>/images/featured-backup.png">  
						<?php } ?>
					</a>
				</div>

				<div class="entry-content">
					
					<h2 class="entry-title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
					
					<?php 
					$beds = get_post_meta( get_the_ID(), 'bedrooms', true ); 
					$baths = get_post_meta( get_the_ID(), 'baths', true ); 
					$rent = get_post_meta( get_the_ID(), 'rent', true ); ?>
					
					<h4 class="description-fields">
						<span class="field rent">
							<?php if ($rent) {
								echo "<span class='label'>Rent:</span> $" . $rent;
							} ?>
						</span>

						<span class="field">
							<?php if ($beds) {
								echo "<span class='label'>Beds: </span>" . $beds;
							} ?>
						</span>
						<span class="field">
							<?php if ($baths) {
								echo "<span class='label'>Baths:</span> " . $baths;
							} ?>
						</span>
					</h4>	 

					<p><?php the_excerpt(); ?></p>
				</div>
			</a>
		</div>
	<?php endwhile; ?>
</div>




</main>

<?php
get_footer();

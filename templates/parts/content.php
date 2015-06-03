<?php
/**
 * The default template part for displaying content.
 *
 * @package Shrake
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-inside">

		<header class="entry-header">
			<h2 class="entry-title"><?php the_title(); ?></h2>

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

			<div class="contact">
				View this apartment:
				<span class="field"><a href="mailto:info@apartmentsinstjohns.ca">
					info@apartmentsinstjohns.ca</a>
				</span>
				<span class="field">555-555-5555</span>
			</div>
		</header>
 
		<div class="entry-content" itemprop="text">
			<?php the_content(); ?>
			<div class="contact">
				View this apartment:
				<span class="field"><a href="mailto:info@apartmentsinstjohns.ca">
					info@apartmentsinstjohns.ca</a>
				</span>
				<span class="field">555-555-5555</span>
			</div>
		</div>

		<?php 
		$address = get_field('google_map_address', get_the_ID()); 

		if( !empty($address) ) : ?>
			<aside>
				<?php get_template_part('templates/parts/google-map'); ?>
			</aside>
	<?php endif; ?>



		<footer class="entry-footer">
			<?php shrake_entry_terms(); ?>
		</footer>


	</div>
</article>

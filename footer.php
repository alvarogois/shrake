<?php
/**
 * The template for displaying the site footer.
 *
 * @package Shrake
 * @since 1.0.0
 */
?>
			<?php do_action( 'shrake_content_bottom' ); ?>

		</div> <!-- .site-content -->

		<?php do_action( 'shrake_content_after' ); ?>

		<footer id="footer" class="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

		<div class="contact">
		<h3>Get in touch</h3>
			<span class="field"><a href="mailto:info@apartmentsinstjohns.ca">
				info@apartmentsinstjohns.ca</a>
			</span>
			<span class="field">709-765-9888 / 709-743-3390</span>
			<div class="login"><a href="/login">+</a></div>
		</div>
		
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>

				<div class="widget-area" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
					<div class="block-grid block-grid-3">
						<?php do_action( 'shrake_footer_widgets_top' ); ?>

						<?php dynamic_sidebar( 'footer-widgets' ); ?>

						<?php do_action( 'shrake_footer_widgets_bottom' ); ?>
					</div>
				</div>

			<?php endif; ?>
		</footer>

		<?php do_action( 'shrake_after' ); ?>

	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>

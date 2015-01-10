<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package tabula-rasa
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'tabula-rasa' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>
			
		<?php endif; // end sidebar widget area ?>
		<div class="sidebar_advert">
			<?php echo $ad_sidebar; ?>
		</div>
	</div><!-- #secondary -->

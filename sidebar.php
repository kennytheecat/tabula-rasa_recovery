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
				<h1 class="widget-title"><?php _e( 'Featured Recovery Centers', 'tabula-rasa' ); ?></h1>
				
			<?php //while ( have_posts() ) : the_post(); 
				$args = array(
					'posts_per_page' => 3,
					'post_type' => 'rehabs',
					'orderby' => 'rand'
				);
    $query = new WP_Query( $args  );
    while( $query->have_posts() ):
    $query->the_post();
		$post_id = $post->ID;
		?>
					<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail('compare'); ?>
						</div>
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="philosophy">
						<?php the_excerpt(); ?>
					</div>
			<?php endwhile; // end of the loop. ?>
			
			</aside>
			
		<?php endif; // end sidebar widget area ?>
		<div class="sidebar_advert">
			<?php echo $ad_sidebar; ?>
		</div>
	</div><!-- #secondary -->

<?php
/**
Front Page
 */
get_header(); 
?>
	<div class="call_to_action">
		<div class="call_to_action_text">
			<h1>Your first stop on the road to recovery</h1>
			<h2>
				<a href="<?php echo home_url(); ?>/at-a-glance">Search for the Best Rehab Centers in Prescott, AZ</a></h2>
		</div>
	</div>
	<div class="blurb-wrapper">
		<div class="blurb">
			<p>Prescott Recovery Centers provides detailed information about every rehab and treatment facilities in Prescott, Arizona.</p>
		</div>
	</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="news_prescott">
				<h2>Recent Recovery News in Prescott</h2>
				<?php 
				$prescott_news = new WP_Query('category_name=prescott-recovery'); // exclude category 9 103
				while($prescott_news->have_posts()) : $prescott_news->the_post(); 
				?>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail('prescott_news'); ?>
					</div>
					<?php the_excerpt(); ?>
				</div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); // reset the query ?>				
			</div>
			<div class="news_recovery">
				<h2>Recent Recovery News</h2>
				<?php 
				$recent_recovery = new WP_Query('category_name=recovery'); // exclude category 9 109
				while($recent_recovery->have_posts()) : $recent_recovery->the_post(); 
				?>
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail('recent_recovery'); ?>
					</div>
					<?php the_excerpt(); ?>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>					
			</div>
			<div class="advert-section">
				<h2>Advert</h2>
				<div class="advert">
					<?php echo $ad_homepage; ?>
				</div>
			</div>			
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
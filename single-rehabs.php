<?php
/**
 * @package WordPress
 * @subpackage Starkers HTML5
 */
get_header(); 
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php 
		if (have_posts()) : while (have_posts()) : the_post(); 
		require_once('inc/rehabs/rehab-functions.php');
		?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">			
			<!-- Rehah Heading -->
			<div class="rehab_heading" itemscope itemtype="http://schema.org/LocalBusiness">
				<?php echo $rehab_heading; ?>
			</div>
			
			<!-- BASIC INFORMATION -->
			<div class="basicinfo">
				<?php echo $basic_info; ?>
			</div>			
			<!-- Descriptions -->			
			<div class="philosophy">
				<?php the_content(); ?>			
			</div>
			
			<div class="recovery-articles">
			<?php //while ( have_posts() ) : the_post(); 
				$args = array(
					'posts_per_page' => 1,
					'post_type' => 'post',
					'orderby' => 'rand'
				);
				$query = new WP_Query( $args  );
				while( $query->have_posts() ):
				$query->the_post();
				$post_id = $post->ID;
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail('compare'); ?>
						</div>
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_excerpt(); ?> 
						<?php endif; ?>					
				</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>			
			</div>
			<!-- DETAILS LIST -->
			<div class="details_wrap" class="top_background">

				<!-- Rehab Treatment Details -->
				<div class="treatment_details">
					<?php 
					echo $treatment_details_header;
					if ( $treatment_details_proceed != 'go' ) { echo $treatment_no_details; } ?>
					<div class="residential_options">
						<?php if ( $residential_options != 'stop' ) { echo $residential_options_list; }?>
					</div>
					<div class="treatment_services">
						<?php if ( $treatment_services != 'stop' ) { echo $treatment_services_list; }?>
					</div>
					<div class="treatment_methods">
						<?php if ( $treatment_methods != 'stop' ) { echo $treatment_methods_list; } ?>
					</div>
					<div class="client_types">
						<?php if ( $client_types != 'stop' ) { echo $client_types_list; } ?>
					</div>
				</div>
				
				<!-- Rehab Payment Details -->
				<div class="payment_details">
					<?php 
					echo $payment_details_header;
					if ( $payment_details_proceed != 'go') { echo $payment_no_details; } ?>
					<div class="payment_forms">
						<?php if ( $payment_forms != 'stop' ) { echo $payment_forms_list; }?>
					</div>
					<div class="insurance_plans">
						<?php if ( $insurance_plans != 'stop' ) { echo $insurance_plans_list; }?>
					</div>
				</div>
			</div> <!-- end .details_wrap -->		
			<!-- Google AD -->
			<div class="google_advert">
				<?php echo $google_advert; ?>
			</div>	
		</article>
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->			
<?php get_footer(); ?>
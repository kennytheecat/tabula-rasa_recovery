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
			<div class="listing_nav">
				<?php echo $listing_nav; ?>
			</div>			
			<!-- BASIC INFORMATION -->
			<div class="basicinfo" itemscope itemtype="http://schema.org/LocalBusiness">
				<?php echo $basic_info; ?>
			</div>
			<div class="philosophy">
				<?php the_content(); ?>			
			</div>
			<!-- PHOTO GALLERY OR AD -->
			<div class="google_advert">
				<?php echo $google_advert; ?>
			</div>
			<!-- MAP -->
			<div id="rvpark_gmap_wrapper">
				<?php
				echo '<div id="map" style="height: 250px; width: 610px;">';
				include('inc/maps/map.php');
				echo '</div>';
				?>
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
			<hr />
			
			<!-- REVIEWS -->
			<div id="review_box">	
				<h2>Reviews for <?php echo $name; ?></h2>
				<?php comments_template( '/comments-rvparks.php' ); ?>
			</div>		
		</article>
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->			
<?php get_footer(); ?>
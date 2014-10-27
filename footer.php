<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package tabula-rasa
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner-footer">
			<div class="rehab_list">
				<?php 
				$args = array (
					'post_type' => 'rehabs',
					'orderby' => 'name',
					'order' => 'ASC',
					'posts_per_page' => -1 
				);
				$rehab_list = new WP_Query( $args ); // exclude category 9
				while($rehab_list->have_posts()) : $rehab_list->the_post(); 
				$rehab_list_array[] = '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
				?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); // reset the query ?>	
				<?php
				$count = count( $rehab_list_array );
				$divided_count = round ( $count / 4 );		
				$rehab_list_array_divided = array_chunk( $rehab_list_array, $divided_count )
				?>
				<ul>
				<?php 
				foreach ( $rehab_list_array_divided[0] as $rehab_list ){
					echo $rehab_list;
				}
				?>
				</ul>
				<ul>
				<?php 
				foreach ( $rehab_list_array_divided[1] as $rehab_list ){
					echo $rehab_list;
				}
				?>
				</ul>
				<ul>
				<?php 
				foreach ( $rehab_list_array_divided[2] as $rehab_list ){
					echo $rehab_list;
				}
				?>
				</ul>	
				<ul>
				<?php 
				foreach ( $rehab_list_array_divided[3] as $rehab_list ){
					echo $rehab_list;
				}
				?>
				</ul>				
			</div>
			<div class="site-info">
				<?php printf( __( 'Site Design by %1$s', 'tabula-rasa' ),  '<a href="http://third-law.com/" rel="designer">Third Law Web Design</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
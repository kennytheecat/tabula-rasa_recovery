<?php
/*
Template Name: Compare
*/
get_header(); 
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php //while ( have_posts() ) : the_post(); 
			$args = array(
				'posts_per_page' => -1,
				'post_type' => 'rehabs',
				'orderby' => 'title', 
				'order' => 'ASC'
			);
    $query = new WP_Query( $args  );
    while( $query->have_posts() ):
    $query->the_post();
		$post_id = $post->ID;
		?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail('compare'); ?>
						</div>
						<?php endif; ?>
					</header><!-- .entry-header -->
					<div class="philosophy">
						<h3>Description</h3>
						<?php the_excerpt(); ?>
					</div>
						<div class="residential_options_section">
							<h3>Residential Options</h3>
						<?php 
						$residential_options = details_list ( $post_id, 'residential_options' );
						if ( $residential_options != 'stop' ) {
							echo $residential_options;
						}
						?>
					</div>

					<footer class="entry-meta">
						<?php //edit_post_link( __( 'Edit', 'tabula-rasa' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<div class="aside-articles">

			<?php //while ( have_posts() ) : the_post(); 
				$args = array(
					'posts_per_page' => 30,
					'post_type' => 'post',
					'orderby' => 'rand'
				);
				$query = new WP_Query( $args  );
				while( $query->have_posts() ):
				$query->the_post();
				$post_id = $post->ID;
			?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</header><!-- .entry-header -->
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail('compare'); ?>
						</div>
						<?php //the_excerpt(); ?> 
						<?php endif; ?>					
				</article><!-- #post -->
			<?php endwhile; // end of the loop. ?>
			
	</div>
<?php get_footer(); ?>
<?php
/**
 * @package tabula-rasa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php tr_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'tabula-rasa' ) );
				if ( $categories_list && tr_categorized_blog() ) :
			?>
			<?php if ( is_home()) { ?>
			<span class="cat-links">
				<?php printf( __( ' in %1$s', 'tabula-rasa' ), $categories_list ); ?>
			</span>
			<?php } ?>
			<?php endif; // End if categories ?>
		<?php endif; // End if 'post' == get_post_type() ?>		
	</header><!-- .entry-header -->
	<div class="entry-thumbnail">
		<?php the_post_thumbnail('prescott_news'); ?>
	</div>
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'tabula-rasa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
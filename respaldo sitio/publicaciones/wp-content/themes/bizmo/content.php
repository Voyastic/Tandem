<?php
/**
 * @package bizmo
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php bizmo_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
	 <?php if ( has_post_thumbnail()) : ?>
	   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	   <?php the_post_thumbnail('blog-image'); ?>
	   </a>
	 <?php endif; ?>
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" class="button continue-reading-button"><?php _e( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bizmo' ); ?></a>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		 <?php if ( has_post_thumbnail()) : ?>
		   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
		   <?php the_post_thumbnail('blog-image'); ?>
		   </a>
		 <?php endif; ?>
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bizmo' ) ); ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark" class="button continue-reading-button"><?php _e( 'Continue reading <span class="meta-nav">&rarr;</span>', 'bizmo' ); ?></a>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bizmo' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'bizmo' ) );
				if ( $categories_list && bizmo_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<i class="dashicons dashicons-category"></i> %1$s', 'bizmo' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'bizmo' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php echo '<i class="dashicons dashicons-tag"></i> '; printf( $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><i class="dashicons dashicons-admin-comments"></i> <?php comments_popup_link( __( 'Leave a comment', 'bizmo' ), __( '1 Comment', 'bizmo' ), __( '% Comments', 'bizmo' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'bizmo' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

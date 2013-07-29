<?php
/**
 * @package subsimple
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="single-entry-title entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta single-entry-meta">
			<?php //subsimple_posted_on(); ?>
            
				<span class="author_link">
				<?php printf( __( the_author_posts_link(), 'subsimple' ) ); ?>
				</span>
                <span class="date_link"><span class='sep'>|</span> 
				<?php printf( __( ' %1$s', 'subsimple' ), the_date() ); ?>
				</span>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'subsimple' ) );
				if ( $categories_list && subsimple_categorized_blog() ) :
			?>
			<span class="cat_link"><span class='sep'>|</span>
				<?php printf( __( ' %1$s', 'subsimple' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="single-entry-content entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'subsimple' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="footer-meta entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'subsimple' ) );

				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'Tags: %1$s. ', 'subsimple' );
				} else {
					$meta_text = __( '', 'subsimple' );
				}

			printf(
				$meta_text, $tag_list
			);
		?>

		<?php edit_post_link( __( 'Edit', 'subsimple' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->

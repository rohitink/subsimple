<?php
/**
 * @package subsimple
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php subsimple_posted_on(); ?>
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'subsimple' ) );
                    if ( $categories_list && subsimple_categorized_blog() ) :
                ?>
                <span class="cat-links">
                    <?php printf( __( 'in %1$s', 'subsimple' ), $categories_list ); ?>
                </span>
                <?php endif; // End if categories ?>
    
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'subsimple' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php //printf( __( 'Tagged %1$s', 'subsimple' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            <?php endif; // End if 'post' == get_post_type() ?>
    
            <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
            <span class="comments-link">
			<?php comments_popup_link( __( 'No Comments', 'subsimple' ), __( '1 Comment', 'subsimple' ), __( '% Comments', 'subsimple' ) ); ?></span>
            <?php endif; ?>
    
            <?php //edit_post_link( __( 'Edit', 'subsimple' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
    	<div class="featured-thumb">
    	<?php	
    	if ( has_post_thumbnail() ) {
			the_post_thumbnail(array(150,150));
		}
		?>
        </div>
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'subsimple' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'subsimple' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		

		<?php edit_post_link( __( 'Edit', 'subsimple' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->

<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Designers Default
 * @since Designers Default 1.0
 */
?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<article id="post-0" class="post error404 not-found">
		<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<section class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</section><!-- .entry-content -->
	</article><!-- #post-0 -->
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php /* How to display posts in the Gallery category. */ ?>

	<?php if ( in_category( _x('gallery', 'gallery category slug', 'twentyten') ) ) : ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
    		    <h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    
    			<div class="entry-meta">
    				<?php twentyten_posted_on(); ?>
    			</div><!-- .entry-meta -->
    		</header>

			<section class="entry-content">
                <?php if ( post_password_required() ) : ?>
				<?php the_content(); ?>
                <?php else : ?>			
				<?php 
					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
					if ( $images ) :
						$total_images = count( $images );
						$image = array_shift( $images );
						$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
				?>
						<div class="gallery-thumb">
							<a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
						</div><!-- .gallery-thumb -->
						<p><em><?php printf( __( 'This gallery contains <a %1$s>%2$s photos</a>.', 'twentyten' ),
								'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
								$total_images
							); ?></em></p>
				<?php endif; ?>
						<?php the_excerpt(); ?>
<?php endif; ?>
			</section><!-- .entry-content -->

    
			<footer class="entry-utility">
				<a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'twentyten'), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'twentyten' ); ?>"><?php _e( 'More Galleries', 'twentyten' ); ?></a>
				<span class="meta-sep">|</span>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-utility -->
		</article><!-- #post-## -->

<?php /* How to display posts in the asides category */ ?>

	<?php elseif ( in_category( _x('asides', 'asides category slug', 'twentyten') ) ) : ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
			<section class="entry-summary">
				<?php the_excerpt(); ?>
			</section><!-- .entry-summary -->
		<?php else : ?>
			<section class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
			</section><!-- .entry-content -->
		<?php endif; ?>

			<footer class="entry-utility">
				<?php twentyten_posted_on(); ?>
				<span class="meta-sep">|</span>
				<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyten' ), __( '1 Comment', 'twentyten' ), __( '% Comments', 'twentyten' ) ); ?></span>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-utility -->
		</article><!-- #post-## -->

<?php /* How to display all other posts. */ ?>

	<?php else : ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
    			<div class="entry-meta">
    			    <div class="day"><?php the_time('d') ?></div>
    				<div class="year"><?php the_time('Y') ?></div>
    				<div class="month"><?php the_time('M') ?></div>
    			</div><!-- .entry-meta -->
		        <h1><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            </header>
            <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
            		<section class="entry-summary">
            			<?php the_excerpt(); ?>
            		</section><!-- .entry-summary -->
            <?php else : ?>
            		<section class="entry-content">
            			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?>
            			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
            		</section><!-- .entry-content -->
            <?php endif; ?>

			<footer class="entry-utility">
			    This entry was posted on <span class="Pictos">\</span> <?php the_time('l, F jS, Y') ?> in the categories <?php the_category(' <span class="Pictos">I</span> ',' <span class="Pictos">I</span> '); ?><?php the_tags(' with the tags <span class="Pictos">z</span> ',' <span class="Pictos">z</span> '); ?>. You can follow any responses to this post via <a href="<?php the_permalink(); ?>/feed">the post RSS-2.0 feed</a>. <?php comments_popup_link( __( '<span class="Pictos">q</span> You can leave a response or trackback from your own site.', 'twentyten' ), __( '<span class="Pictos">q</span> There is 1 comment. Click here to view.', 'twentyten' ), __( '<span class="Pictos">q</span> There are % comments. Click here to view.', 'twentyten' ) ); ?> <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="meta-sep">|</span> <span class="edit-link"><span class="Pictos">p</span> ', '</span>' ); ?> <a id="showcomments" href="#comments">Show Comments</a> 
			</footer>
            
			<div style="display: none;">
			    <div id="comments" style="width:800px;height:500px;overflow:auto;">
    		        <?php comments_template(); ?>
    		    </div>
    		</div>
			    
		</article><!-- #post-## -->

	<?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>


<?php endwhile; // End the loop. Whew. ?>



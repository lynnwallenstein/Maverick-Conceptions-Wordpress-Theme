<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Designers Default
 * @since Designers Default 1.0
 */

get_header(); ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	</nav><!-- #nav-above -->
<?php endif; ?>
            <section id="content" role="main">

                <?php
                /* Run the loop to output the posts.
                 * If you want to overload this in a child theme then include a file
                 * called loop-index.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'index' );
                ?>
            </section><!-- #content -->
        
<?php get_footer(); ?>

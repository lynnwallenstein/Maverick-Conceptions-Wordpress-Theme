<?php
/*
 * Template Name: Archives
 *
 * @package WordPress
 * @subpackage Designers Default
 * @since Designers Default 1.0
 */

get_header(); ?>

            <section id="content" role="main" class="page">
                <article>
                    <header>
                        <h1>Archives</h1>
                    </header>
                    <section class="entry-content">
                        
                        <section id="tag_cloud" class="archive_section">
                            <h2>Archives by Tag</h2>
                            <?php wp_tag_cloud(''); ?>
                            <div class="clear"></div>
                        </section>
                    
                        <section id="categories" class="archive_section">
                            <h2>Archives by Category</h2>
                            <ul>
                                 <?php wp_list_categories(); ?>
                            </ul>                        
                        </section>
                        
                        <section id="yearly_archives" class="archive_section">
                            <h2>Archives by Date</h2>
                            <ul>
                                <?php wp_get_archives('type=yearly'); ?>
                            </ul>
                        </section>  
                                                
                    </section><!-- #content -->
                </article>
            </section><!-- #content -->

<?php get_footer(); ?>

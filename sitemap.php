<?php
/*
 * Template Name: Sitemap
 *
 * @package WordPress
 * @subpackage Designers Default
 * @since Designers Default 1.0
 */

get_header(); ?>

            <section id="content" role="main" class="page">
                <article>
                    <header>
                        <h1>Sitemap</h1>
                    </header>
                    <section class="entry-content">
                        
                        <section class="sitemap_section">
                            <h2><span class="Pictos">F</span> Pages</h2>
                            <ul>
                                <?php wp_list_pages("&title_li=&sort_column=post_title"); ?> 
                            </ul>
                        </section>
                        
                        <section class="sitemap_section">
                            <h2><span class="Pictos">I</span> Categories</h2>
                            <ul>
                            <?php wp_list_categories("&title_li="); ?> 
                            </ul>
                        </section>
                        
                        <section class="sitemap_section">
                            <h2><span class="Pictos">z</span> Popular Tags</h2>
                            <?php wp_tag_cloud(); ?> 
                        </section>
                        
                        <section class="sitemap_section">
                            <h2><span class="Pictos">\</span> Archives</h2>
                            <ul>
                            <?php wp_get_archives(); ?> 
                            </ul>
                        </section>
                        
                        <section class="sitemap_section">
                            <h2><span class="Pictos">f</span> Feeds</h2>
                            <dl>
                                <dt>RSS</dt>
                                <dd><a href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('rss2_url'); ?></a></dd>
                            </dl>
                        </section> 
                                                
                    </section><!-- #content -->
                </article>
            </section><!-- #content -->

<?php get_footer(); ?>

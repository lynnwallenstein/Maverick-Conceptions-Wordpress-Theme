<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Designers Default
 * @since Designers Default 1.0
 */
?>
                <?php if ( is_home() ) { ?>
                <div id="twitter_widget">
                </div>
                <?php } ?>
                <nav id="page_side">
                    <h2>Navigation</h2>
                    <ul>
                        <li id="categories"><a href="/archives#categories">* Categories</a></li>
                        <li id="tag_cloud"><a href="/archives#tag_cloud">* Tag Cloud</a></li>
                        <li id="archive"><a href="/archives">* Archives</a></li>
                        <li id="rss"><a href="/feed">* RSS</a></li>
                    </ul>
                </nav>
                <nav id="page_bottom">
                    <ul>
                        <li id="home" <?php if ( is_home() ) { ?>class="active"<?php } ?>><a href="/">home</a></li>
                        <li id="about" <?php if ( is_page('About')  ) { ?>class="active"<?php } ?>><a href="/about">about</a></li>
                        <li id="contact" <?php if ( is_page('Contact')  ) { ?>class="active"<?php } ?>><a href="/contact">contact</a></li>
                        <li id="lifestream" <?php if ( is_page('Lifestream')  ) { ?>class="active"<?php } ?>><a href="/lifestream">lifestream</a></li>
                    </ul>
                </nav>
            </div><!-- #container -->
                    
            </div><!-- #wrapper -->
    
            <div id="logo">
            	<a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_large.png" alt="Maverick Concentions" /></a>
            </div>

        </div><!-- #wrap -->

        <footer role="contentinfo" id="page_footer">
            <div id="sites_button">
                <div id="button_menu">
                    <ul class="sites_menu">
                        <li id="delicious"><a target="_blank" href="http://www.delicious.com/lwallenstein">Delicious</a></li>
                        <li id="digg"><a target="_blank" href="http://digg.com/lwallenstein">Digg</a></li>
                        <li id="facebook"><a target="_blank" href="http://www.facebook.com/lynnwallenstein">Facebook</a></li>
                        <li id="flickr"><a target="_blank" href="http://www.flickr.com/photos/lwallenstein">Flickr</a></li>
                        <li id="google"><a target="_blank" href="https://www.google.com/profiles/lwallenstein">Google</a></li>
                        <li id="lastfm"><a target="_blank" href="http://www.last.fm/user/lwallenstein">Last.fm</a></li>
                        <li id="linkedin"><a target="_blank" href="http://www.linkedin.com/in/lwallenstein">LinkedIn</a></li>
                        <li id="twitter"><a target="_blank" href="http://www.twitter.com/lynnwallenstein">Twitter</a></li>
                        <li id="youtube"><a target="_blank" href="http://www.youtube.com/user/lwallenstein">YouTube</a></li>
                        <li id="vimeo"><a target="_blank" href="http://www.vimeo.com/lwallenstein">Vimeo</a></li>
                    </ul>
                </div>    
                <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_small.png" alt="Maverick Concentions"></a>
            </div>
            <div id="links">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/about">about</a></li>
                    <li><a href="/contact">contact</a></li>
                    <li><a href="/lifestream">lifestream</a></li>
                    <li><a href="/sitemap">sitemap</a></li>
                </ul>
                <p>If you would like to make use of any of the content you see here, please <a href="/contact">contact me</a>. View the <a href="/about/license">license page</a> for more details.</p>
            </div>
        </footer>



        <!-- Javascript at the bottom for fast page loading -->
        
        <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script>!window.jQuery && document.write('<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.4.2.min.js"><\/script>')</script>
        
    	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
    	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/fancybox/jquery.fancybox-1.3.1.js"></script>
    	
        <?php if ( is_home() ) { ?>
            <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.twitter.js"></script>
            <script>
                $("#twitter_widget").getTwitter({
        			userName: "LynnWallenstein",
        			numTweets: 1,
        			loaderText: "Loading tweets...",
        			slideIn: false,
        			slideDuration: 750,
        			showHeading: true,
        			headingText: '<span class="Pictos">B</span> From Twitter',
        			showProfileLink: false,
        			showTimestamp: true
    		    });
		    </script>
        <?php } ?>	
        
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js?v=1"></script>
        <script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js?v=1"></script>
        
        <!--[if lt IE 7 ]>
        <script src="<?php bloginfo('stylesheet_directory'); ?>js/dd_belatedpng.js?v=1"></script>
        <![endif]-->   
        
        <!-- asynchronous google analytics: mathiasbynens.be/notes/async-analytics-snippet  change the UA-XXXXX-X to be your site's ID -->
        <script>
            var _gaq = [['_setAccount', 'UA-516154-20'], ['_trackPageview']];
            (function(d, t) {
            var g = d.createElement(t),
                s = d.getElementsByTagName(t)[0];
            g.async = true;
            g.src = '//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g, s);
            })(document, 'script');
        </script>
  

        <?php
            /* Always have wp_footer() just before the closing </body>
             * tag of your theme, or you will break many plugins, which
             * generally use this hook to reference JavaScript files.
             */
        
            wp_footer();
        ?>
    </body>
</html>

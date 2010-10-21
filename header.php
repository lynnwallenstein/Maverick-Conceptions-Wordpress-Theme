<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Maverick Conceptions
 * @since Maverick Conceptions 2.0
 */
?>

<!doctype html>
<!--[if lt IE 7]>  <html <?php language_attributes(); ?> class="ie ie6 lte9 lte8 lte7 no-js<?php if (is_home()) : ?> is_home<?php endif; ?><?php if (is_front_page()) : ?> is_front_page<?php endif; ?><?php if (is_page()) : ?> is_page<?php endif; ?><?php if (is_single()) : ?> is_single<?php endif; ?><?php if (is_admin()) : ?> is_admin<?php endif; ?><?php if (is_sticky()) : ?> is_sticky<?php endif; ?>"> <![endif]-->
<!--[if IE 7]>     <html <?php language_attributes(); ?> class="ie ie7 lte9 lte8 lte7 no-js<?php if (is_home()) : ?> is_home<?php endif; ?><?php if (is_front_page()) : ?> is_front_page<?php endif; ?><?php if (is_page()) : ?> is_page<?php endif; ?><?php if (is_single()) : ?> is_single<?php endif; ?><?php if (is_admin()) : ?> is_admin<?php endif; ?><?php if (is_sticky()) : ?> is_sticky<?php endif; ?>"> <![endif]-->
<!--[if IE 8]>     <html <?php language_attributes(); ?> class="ie ie8 lte9 lte8 no-js<?php if (is_home()) : ?> is_home<?php endif; ?><?php if (is_front_page()) : ?> is_front_page<?php endif; ?><?php if (is_page()) : ?> is_page<?php endif; ?><?php if (is_single()) : ?> is_single<?php endif; ?><?php if (is_admin()) : ?> is_admin<?php endif; ?><?php if (is_sticky()) : ?> is_sticky<?php endif; ?>"> <![endif]-->
<!--[if IE 9]>     <html <?php language_attributes(); ?> class="ie ie9 lte9 no-js<?php if (is_home()) : ?> is_home<?php endif; ?><?php if (is_front_page()) : ?> is_front_page<?php endif; ?><?php if (is_page()) : ?> is_page<?php endif; ?><?php if (is_single()) : ?> is_single<?php endif; ?><?php if (is_admin()) : ?> is_admin<?php endif; ?><?php if (is_sticky()) : ?> is_sticky<?php endif; ?>"> <![endif]-->
<!--[if gt IE 9]>  <html <?php language_attributes(); ?> class="ie gt9 no-js<?php if (is_home()) : ?> is_home<?php endif; ?><?php if (is_front_page()) : ?> is_front_page<?php endif; ?><?php if (is_page()) : ?> is_page<?php endif; ?><?php if (is_single()) : ?> is_single<?php endif; ?><?php if (is_admin()) : ?> is_admin<?php endif; ?><?php if (is_sticky()) : ?> is_sticky<?php endif; ?>"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?> class="neie no-js<?php if (is_home()) : ?> is_home<?php endif; ?><?php if (is_front_page()) : ?> is_front_page<?php endif; ?><?php if (is_page()) : ?> is_page<?php endif; ?><?php if (is_single()) : ?> is_single<?php endif; ?><?php if (is_admin()) : ?> is_admin<?php endif; ?><?php if (is_sticky()) : ?> is_sticky<?php endif; ?>"><!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php
            /*
             * Print the <title> tag based on what is being viewed.
             */
            global $page, $paged;
        
            wp_title( '|', true, 'right' );
        
            // Add the blog name.
            bloginfo( 'name' );
        
            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) )
                echo " | $site_description";
        
            // Add a page number if necessary:
            if ( $paged >= 2 || $page >= 2 )
                echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
        
            ?></title>
            
            <!-- Google will often use this as its description of your page/site. Make it good. -->
            <meta name="description" content="Personal blog of Lynn Wallenstein, designer, developer, and web standards advocate." />
            
            <meta name="author" content="Lynn Wallenstein" />
            <meta name="Copyright" content="Copyright Lynn Wallenstein 2010. All Rights Reserved." />
            
            <meta name="DC.title" content="Maverick Conceptions" />
            <meta name="DC.subject" content="Personal blog of Lynn Wallenstein, designer, developer, and web standards advocate." />
            <meta name="DC.creator" content="Lynn Wallenstein" />
            
            <!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
            <meta name="google-site-verification" content="" />            
            
            <link rel="profile" href="http://gmpg.org/xfn/11" />
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
            
            <!--  Mobile Viewport Fix
                j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
            device-width : Occupy full width of the screen in its current orientation
            initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
            maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
            -->
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        
            <!-- This is the traditional favicon.
                 - size: 16x16 or 32x32
                 - transparency is OK
                 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
            <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png">
                 
            <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-touch-icon-precomposed.png"/>
            <!-- The is the icon for iOS's Web Clip.
                 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
                 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
                 - Transparency is not recommended (iOS will put a black BG behind the icon) -->            
            
        
            
            <!-- CSS : implied media="all" -->
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/plugins/fancybox/jquery.fancybox-1.3.1.css" />  
            <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=1" />
            
                    
            <link rel="stylesheet" media="print" href="<?php bloginfo('stylesheet_directory'); ?>/css/_print/main.css?v=1" />  
            <?php
                /* We add some JavaScript to pages with the comment form
                 * to support sites with threaded comments (when in use).
                 */
                if ( is_singular() && get_option( 'thread_comments' ) )
                    wp_enqueue_script( 'comment-reply' );
            
                /* Always have wp_head() just before the closing </head>
                 * tag of your theme, or you will break many plugins, which
                 * generally use this hook to add elements to <head> such
                 * as styles, scripts, and meta tags.
                 */
                wp_head();
            ?>      
        
            <!-- For the less-enabled mobile browsers like Opera Mini -->
            <link rel="stylesheet" media="handheld" href="<?php bloginfo('stylesheet_directory'); ?>/css/handheld.css?v=1">
        
            <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
            <script src="<?php bloginfo('stylesheet_directory'); ?>/js/modernizr-1.6.js"></script>
        
            <!-- These are IE-specific conditional style sheets. You might consider removing the ones you don't end up using. -->
                 
            <!--[if IE]>
            <link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/_patches/win-ie-all.css" />
            <![endif]-->
            <!--[if IE 7]>
            <link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/_patches/win-ie7.css" />
            <![endif]-->
            <!--[if lt IE 7]>
            <link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/_patches/win-ie-old.css" />
            <![endif]-->
            
            <!-- The following is STRONGLY OPTIONAL, but useful if you really need to kick IE in the pants.
                 There are different flavors; pick the one right for your project: http://code.google.com/p/ie7-js/ -->
            <!--[if lt IE 9]>
                <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
            <![endif]-->           
    
    </head>

    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

    <!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
    <!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
    <!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
    <!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
    <!--[if (gt IE 9)|!(IE)]><!--> <body class="<?php if (is_home()) : ?>is_home<?php endif; ?> <?php if (is_page()) : ?>is_page<?php endif; ?> <?php if (is_single()) : ?>is_single<?php endif; ?> <?php if (is_admin()) : ?>is_admin<?php endif; ?> <?php if (is_sticky()) : ?>is_sticky<?php endif; ?>"> <!--<![endif]-->            
            
    <div id="wrap">
        <div id="wrapper" class="hfeed">
            <div id="container">

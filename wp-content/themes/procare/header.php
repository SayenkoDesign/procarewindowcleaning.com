<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="height=device-height,width=device-width,initial-scale=1">

<meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="window, roof, gutter, cleaning, seattle, bellevue, kirkland, redmond, procare, pro care, window cleaning, roof cleaning, gutter cleaning" />
<meta name="google-site-verification" content="dxQEM2ZbxDgCFkwG2AkkEEIsiJwB4zcaYwStRtmQRUY" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" type="image/png" href="<?php echo get_option('home'); ?>/wp-content/themes/procare/icon.png" />
<title>Pro Care Window Cleaning, Pressure Washing, Roof Cleaning Kirkland</title>

<?php wp_head(); ?>




<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3602052-26']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


<script type="text/javascript">(function() {var stag = document.createElement('script'); stag.type = "text/javascript"; stag.async = true; stag.src=('https:' == document.location.protocol ?"https://webchat.voicecurve.com":"http://webchat.a-cti.com")+"/livechat/script/1930007254"; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(stag,s);})();</script>

</head>

<body>

<div id="mobile-nav">
    <div id="mobile-estimate">
        <a href="<?php echo site_url('/free-estimate'); ?>">Free Estimate <i class="fa fa-angle-right"></i></a>
    </div>
    <div id="mobile-logo-bar">
        <div>
            <div id="mobile-phone">
                <a href="tel:+12062275837"><i class="fa fa-phone"></i></a>
            </div>
            <div id="mobile-logo">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-Logo.jpg" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
                </a>
            </div>
            <div id="mobile-menu-icon">
                <a href="#"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dotted-mobile-line.jpg" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
    </div>
    <?php
        wp_nav_menu(array(
            'depth' => 2,
            'theme_location' => 'primary',
            'link_before' => '<span>',
            'link_after' => '</span>',
        ));
    ?>
</div>

<div id="wrapper">

<div id="header">
    <div class="title">
        <h1>We are the Experts in Window, Roof, and Gutter Cleaning!</h1>
    </div>
    <div class="contact">
        <h2>206-227-5837</h2>
        <h3><a href="mailto:info@procarewindowcleaning.com">info@procarewindowcleaning.com</a></h3>
    </div>
</div>

<div id="navbar">
    <div class="search">
        <form method="get" id="searchform" action="<?php echo get_option('home'); ?>">
            <input type="text" size="17" value="" name="s" id="searchbox" />
            <input type="image" src="<?php echo get_option('home'); ?>/wp-content/themes/procare/images/search.jpg" alt="search" />
        </form>
    </div>
    <?php
    wp_nav_menu(array(
        'depth' => 2,
        'theme_location' => 'primary',
        'link_before' => '<span>',
        'link_after' => '</span>',
        'before' => '',
        'after' => ''
    ));
    ?>
    <!--
    <ul>
        <li><a href="<?php echo get_option('home'); ?>">Home</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/kirkland-window-cleaning-kirkland-pressure-washing-roof-cleaning-kirkland">Services</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/kirkland-location">Location</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/faq">FAQ</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/blog-roof-cleaning-kirkland/">Blog</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/about-us">About Us</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/contact-us">Contact Us</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/testimonials">Testimonials</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/feedback">Feedback</a></li>
        <li>|</li>
        <li><a href="<?php echo get_option('home'); ?>/free-estimate">Free Estimate</a></li>
    </ul>
    -->
</div>

<div id="splash-home">
<?php if(is_home()) { ?>

<?php echo slider_pro(1, array('width'=>982, 'height'=>281, 'effect_type'=>'minimalLight')); ?>

        <? }elseif(is_page('about-us')) { ?>
<div id="splash">

   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/kirkland-gutter-cleaning.jpg" title="<?php bloginfo('name'); ?> About Us" />

</div>

	<? }elseif(is_page('feedback')) { ?>
<div id="splash">
   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/Kirkland-pressure-washing.jpg" title="<?php bloginfo('name'); ?> Feedback" />

</div>

	<? }elseif(is_page('kirkland-location')) { ?>
<div id="splash">
   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/kirkland-window-cleaning.jpg" title="<?php bloginfo('name'); ?> kirkland-location" />

</div>

	<? }elseif(is_page('testimonials')) { ?>
<div id="splash">
</div>

	<? }elseif(is_page('kirkland-window-cleaning-kirkland-pressure-washing-roof-cleaning-kirkland')) { ?>
<div id="splash">
   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/services.jpg" title="<?php bloginfo('name'); ?> Services" />

	<? }elseif(is_page('kirkland-location')) { ?>
<div id="splash">
</div>

<? }elseif(is_page('faq')) { ?>
<div id="splash">
   </div>

	<? }elseif(is_page('blog-roof-cleaning-kirkland')) { ?>
<div id="splash">
   </div>

	<? }elseif(is_page('contact-us')) { ?>
<div id="splash">
   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/contact.jpg" title="<?php bloginfo('name'); ?> Contact" />
</div>

	<? }elseif(is_page('feedback')) { ?>
<div id="splash">
</div>
	<? }elseif(is_page('free-estimate')) { ?>
<div id="splash">

   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/estimatesplash.jpg" title="<?php bloginfo('name'); ?> Free Estimate" />
</div>

	<? }else{ ?>
   <img src="<?php bloginfo('home'); ?>/wp-content/themes/procare/images/blog.jpg" title="<?php bloginfo('name'); ?> Blog" />
   <? } //endif ?>
</div>

<div id="spacer">
</div>
<div id="content">
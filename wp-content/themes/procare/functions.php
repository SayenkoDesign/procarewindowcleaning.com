<?php
add_action( 'after_setup_theme', function () {
	register_nav_menu( 'primary', __( 'Primary Menu' ) );
});


if ( !current_user_can( 'edit_users' ) ) {
  add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
  add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}



function custom_colors() {
   echo '<style type="text/css">#wphead{background:#069}</style>';
}

add_action('admin_head', 'custom_colors');




 
function my_custom_logo() {
   echo '
      <style type="text/css">
         #header-logo { background-image: url('.get_bloginfo('template_directory').'/images/logo-login.gif)) !important; }
      </style>
   ';
}

add_action('admin_head', 'my_custom_logo');









if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Newsletter',
		'before_widget' => '', // Removes <li>
		'after_widget' => '', // Removes </li>
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Special',
		'before_widget' => '', // Removes <li>
		'after_widget' => '', // Removes </li>
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));





function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo-login.gif) !important; } </style>';}
 
add_action('login_head', 'my_custom_login_logo');






function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );



/**
 * Add a widget to the dashboard.
 *
 * This function is hooked into the 'wp_dashboard_setup' action below.
 */
function example_add_dashboard_widgets() {

	wp_add_dashboard_widget(
                 'example_dashboard_widget',         // Widget slug.
                 'RECEIVE $100 in CASH FOR A WEBSITE REFERRAL!!',         // Title.
                 'example_dashboard_widget_function' // Display function.
        );	
}
add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function example_dashboard_widget_function() {

	// Display whatever it is you want to show.
	echo "<span style='width:100%'><a href='http://www.sayenkodesign.com'><img alt='Seattle Web Design' src='http://www.sayenkodesign.com/wp-content/uploads/2014/08/Sayenko-Design-WP-Referral-Bonus-460.jpg'></a></span>
</br>
</br>

Simply introduce us via email along with the prospects phone number. Email introductions can be sent to <a href='mailto:mike@sayenkodesign.com'>mike@sayenkodesign.com</a>

</br>
If the prospect signs up for a website package we will send you a $100 check or instantly to your paypal account.";
} 


?>
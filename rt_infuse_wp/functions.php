<?php

global $option, $tname, $fname;

$tname = 'infuse';
$fname = 'Infuse';
$option = get_option('infuse-options');

// Required

require_once(TEMPLATEPATH.'/includes/options_handler.php');
require_once(TEMPLATEPATH.'/includes/common.php');
require_once(TEMPLATEPATH.'/includes/widget_data.php');
require_once(TEMPLATEPATH.'/includes/rokbox.php'); 
require_once(TEMPLATEPATH.'/includes/comments.php');

require_once(TEMPLATEPATH.'/features/RokMenu.php');

// Widgets Include

$wp_ver = get_bloginfo('version');
if ($wp_ver >= 2.8) { 
	include(TEMPLATEPATH . '/includes/widgets/roktabs_wget.php');
	include(TEMPLATEPATH . '/includes/widgets/rokstories_wget.php');
    include(TEMPLATEPATH . '/includes/widgets/rokmenu_wget.php');
    include(TEMPLATEPATH . '/includes/widgets/rokswitcher/rokswitcher_wget.php');
    include(TEMPLATEPATH . '/includes/widgets/rokscroller/rokscroller_wget.php');
}

// Add theme settings menu

function rockettheme_admin_menu() {
	global $tname, $fname;
	add_menu_page('RocketTheme '.$fname.' Theme Settings', $fname.' Settings', 'edit_themes', $tname.'-settings', 'theme_settings_showup', get_bloginfo('template_directory').'/admin/rt_fav.png');  
}

add_action('admin_menu', 'rockettheme_admin_menu', 9);

// Settings Page

function theme_settings_showup() {
	include('admin/rtpanel.php');
}

if (is_admin() && $_GET['page'] == $tname.'-settings') {
	add_action('admin_head', 'theme_settings_admin_css');
	wp_enqueue_script('mootools', get_bloginfo('template_directory').'/admin/js/mootools.js');
	wp_enqueue_script('rokbox_config', get_bloginfo('template_directory').'/js/rokbox/themes/light/rokbox-config.js');
	wp_enqueue_script('rokbox', get_bloginfo('template_directory').'/js/rokbox/rokbox.js');
	wp_enqueue_script('roktabs', get_bloginfo('template_directory').'/js/roktabs/roktabs.js');
	wp_enqueue_script('rokinnertabs', get_bloginfo('template_directory').'/admin/js/tabs.js');
	wp_enqueue_script('roktips', get_bloginfo('template_directory').'/admin/js/roktips.js');
}

if (is_admin() && $_GET['page'] == $tname.'-settings' && !rok_isIE(6)) {
	wp_enqueue_script('rokutils', get_bloginfo('template_directory').'/js/rokutils.inputs.js');
}

function theme_settings_admin_css() {
	echo '
	<link rel="stylesheet" type="text/css" media="screen" href="'.get_bloginfo('template_directory').'/admin/admin.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="'.get_bloginfo('template_directory').'/js/rokbox/themes/light/rokbox-style.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="'.get_bloginfo('template_directory').'/admin/roktabs.css" />
	<!--[if lte IE 6]>
		<link href="'.get_bloginfo('template_directory').'/admin/admin_ie6.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/js/rokbox/themes/light/rokbox-style-ie6.css" type="text/css" />
	<![endif]-->
	<!--[if IE 7]>
		<link href="'.get_bloginfo('template_directory').'/admin/admin_ie7.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/js/rokbox/themes/light/rokbox-style-ie7.css" type="text/css" />	
	<![endif]-->
	<!--[if IE 8]>
		<link href="'.get_bloginfo('template_directory').'/admin/admin_ie8.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="'.get_bloginfo('template_directory').'/js/rokbox/themes/light/rokbox-style-ie8.css" type="text/css" />
	<![endif]-->
	';
}

/**
 * Like implode but with keys
 *
 * @param string[optional] $glue
 * @param array $pieces
 * @param string[optional] $hifen
 * @return string
 */
function implode_with_key($glue = null, $pieces, $hifen = ',') {
    $return = null;
    foreach ($pieces as $tk => $tv) $return .= $glue.$tk.$hifen.$tv;
    return substr($return,1);
}


// sys_get_temp_dir function

require_once(TEMPLATEPATH.'/includes/php4function.php');



function custom_wp_trim_excerpt($text) {
$raw_excerpt = $text;
if ( '' == $text ) {
    $text = get_the_content('');
 
    $text = strip_shortcodes( $text );
 
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
     
    /***Add the allowed HTML tags separated by a comma.***/
    $allowed_tags = '<p>,<a>,<em>,<strong>,<h4>,<h3>,<br>';  
    $text = strip_tags($text, $allowed_tags);
     
    /***Change the excerpt word count.***/
    $excerpt_word_count = 80; 
    $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
     
    /*** Change the excerpt ending.***/
    $excerpt_end = ' <a href="'. get_permalink($post->ID) . '">' . '&raquo; Read more' . '</a>'; 
    $excerpt_more = apply_filters('excerpt_more', ' ' . $excerpt_end);
     
    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
}
return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_wp_trim_excerpt');


// add tag support to pages
function tags_support_all() {
	register_taxonomy_for_object_type('post_tag', 'page');
}
// ensure all tags are included in queries
function tags_support_query($wp_query) {
	if ($wp_query->get('tag')) $wp_query->set('post_type', 'any');
}
// tag hooks
add_action('init', 'tags_support_all');
add_action('pre_get_posts', 'tags_support_query');

?>
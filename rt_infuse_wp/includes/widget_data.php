<?php 

$option = get_option('infuse-options');

if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Top Menu',
    	'id' => 'top_menu',
    	'description' => _r('Top Menu Position'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Showcase',
    	'id' => 'showcase',
    	'description' => _r('Position directly under top menu.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'User 1',
    	'id' => 'user_1',
    	'description' => _r('Position on the left directly under the showcase.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="spacer w99" id="showmodules"><div class="block full"><div class=""><div class="moduletable"><div class="module-padding">',
        'after_widget' => '</div></div></div></div></div></div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'User 2',
    	'id' => 'user_2',
    	'description' => _r('Position on the left directly over the main content.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'User 3',
    	'id' => 'user_3',
    	'description' => _r('Position directly over front page posts - wide.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="'.$option['widget_user3'].'"><div class="moduletable"><div class="module-tm"><div class="module-tl"></div><div class="module-tr"></div></div><div class="module-m"><div class="module-l"><div class="module-r">',
        'after_widget' => '</div></div></div></div><div class="module-bm"><div class="module-bl"></div><div class="module-br"></div></div></div></div></div>',
        'before_title' => '<div class="style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'User 4',
    	'id' => 'user_4',
    	'description' => _r('Position directly over front page posts - narrow.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="'.$option['widget_user4'].'"><div class="moduletable"><div class="module-tm"><div class="module-tl"></div><div class="module-tr"></div></div><div class="module-m"><div class="module-l"><div class="module-r">',
        'after_widget' => '</div></div></div></div><div class="module-bm"><div class="module-bl"></div><div class="module-br"></div></div></div></div></div>',
        'before_title' => '<div class="style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'User 5',
    	'id' => 'user_5',
    	'description' => _r('Position directly under front page posts - narrow.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="'.$option['widget_user5'].'"><div class="moduletable"><div class="module-tm"><div class="module-tl"></div><div class="module-tr"></div></div><div class="module-m"><div class="module-l"><div class="module-r">',
        'after_widget' => '</div></div></div></div><div class="module-bm"><div class="module-bl"></div><div class="module-br"></div></div></div></div></div>',
        'before_title' => '<div class="style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'User 6',
    	'id' => 'user_6',
    	'description' => _r('Position directly under front page posts - narrow.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="'.$option['widget_user6'].'"><div class="moduletable"><div class="module-tm"><div class="module-tl"></div><div class="module-tr"></div></div><div class="module-m"><div class="module-l"><div class="module-r">',
        'after_widget' => '</div></div></div></div><div class="module-bm"><div class="module-bl"></div><div class="module-br"></div></div></div></div></div>',
        'before_title' => '<div class="style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Over Right Front Sidebar',
    	'id' => 'over_right_front_sidebar',
    	'description' => _r('Over the default content of the right frontpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Right Front Sidebar',
    	'id' => 'right_front_sidebar',
    	'description' => _r('Widgets placed here will replace the default content of the right frontpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Under Right Front Sidebar',
    	'id' => 'under_right_front_sidebar',
    	'description' => _r('Under the default content of the right frontpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="moduletable"><div class="module-surround"><div class="module-grad"></div><div class="module-surround2"></div><div class="module-surround3"></div><div class="module-surround4"></div><div class="module-surround5"></div><div class="module-inner">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<h3 class="module-title">',
        'after_title' => '</h3>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Over Left Front Sidebar',
    	'id' => 'over_left_front_sidebar',
    	'description' => _r('Over the default content of the left frontpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Left Front Sidebar',
    	'id' => 'left_front_sidebar',
    	'description' => _r('Widgets placed here will replace the default content of the left frontpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Under Left Front Sidebar',
    	'id' => 'under_left_front_sidebar',
    	'description' => _r('Under the default content of the left frontpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Over Right Subpage Sidebar',
    	'id' => 'over_right_subpage_sidebar',
    	'description' => _r('Over the default content of the right subpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Right Subpage Sidebar',
    	'id' => 'right_subpage_sidebar',
    	'description' => _r('Widgets placed here will replace the default content of the right subpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Under Right Subpage Sidebar',
    	'id' => 'under_right_subpage_sidebar',
    	'description' => _r('Under the default content of the right subpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Over Left Subpage Sidebar',
    	'id' => 'over_left_subpage_sidebar',
    	'description' => _r('Over the default content of the left subpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Left Subpage Sidebar',
    	'id' => 'left_subpage_sidebar',
    	'description' => _r('Widgets placed here will replace the default content of the left subpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Under Left Subpage Sidebar',
    	'id' => 'under_left_subpage_sidebar',
    	'description' => _r('Under the default content of the left subpage sidebar.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class=""><div class="moduletable">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="side-style-h3"><h3 class="module-title">',
        'after_title' => '</h3></div><div class="module-inner">',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Footer 1',
    	'id' => 'footer_1',
    	'description' => _r('Footer widget position.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="highlight-bold">',
        'after_title' => '</span>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Footer 2',
    	'id' => 'footer_2',
    	'description' => _r('Footer widget position.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="highlight-bold">',
        'after_title' => '</span>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Footer 3',
    	'id' => 'footer_3',
    	'description' => _r('Footer widget position.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="highlight-bold">',
        'after_title' => '</span>',
    ));
    
if ( function_exists('register_sidebars') )
    register_sidebars(1, array(
    	'name' => 'Footer 4',
    	'id' => 'footer_4',
    	'description' => _r('Footer widget position.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<span class="highlight-bold">',
        'after_title' => '</span>',
    ));
   
?>
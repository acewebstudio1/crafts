<!DOCTYPE html>
<!--[if IE 6]><html class="ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]><html class="ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]><html class="ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]><html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<html <?php language_attributes(); ?>>

<?php $option = get_option('infuse-options'); ?>
<?php require(TEMPLATEPATH.'/styles.php'); ?>
<?php require(TEMPLATEPATH.'/rt_styleswitcher.php'); ?>
<?php
	global $tstyle, $stylesList, $pstyle;
	global $primary_style, $bg_style, $font_family, $fontstyle, $fontfamily, $presetStyle;
?><?php $preset_style 			= $option['preset_style'];
	if($preset_style == "custom") { 
	$primary_style 			= $option['primary_style'];
	$bg_style 				= $option['background_type'];
	$font_family            = $option['font_face'];
	$presetStyle			= new Style($primary_style, $bg_style, $font_family);
	} else {
	$presetStyle			= $stylesList[$preset_style];
	$primary_style 			= $presetStyle->pstyle;
	$bg_style 				= $presetStyle->bgstyle;
	$font_family            = $presetStyle->fontfamily;
	}
	?>
<?php require(TEMPLATEPATH.'/rt_styleloader.php'); ?>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
		
		 <!-- Latest IE rendering engine & Chrome Frame 2 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=980,initial-scale=1,user-scalable=yes" />
  <meta name="HandheldFriendly" content="True" />
  <link rel="shortcut icon" href="/favicon.ico">
  <meta property="fb:admins" content="438003212914582" />
	
 <!-- <link rel="apple-touch-icon" href="/favicon.png"> -->
		
		<title><?php wp_title(''); ?></title>
		
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/combined.css" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php if (is_front_page() || is_home()) { ?>
	
<link id="royalslider-frontend-css-css" media="all" type="text/css" href="/wp-content/plugins/royalslider/css/royalslider.css" rel="stylesheet">
	
<link id="royalslider-skin-iskin-css" media="all" type="text/css" href="/wp-content/plugins/royalslider/css/royalslider-skins/iskin/iskin.css" rel="stylesheet">

<link id="royalslider-skin-minimal-css" media="all" type="text/css" href="/wp-content/plugins/royalslider/css/royalslider-skins/minimal/minimal.css" rel="stylesheet">
<?php }  ?>


		
		<?php if (rok_isIe()) :?>
		<!--[if IE 8]>
		<style type="text/css">
		#horizmenu-surround {width: auto !important;}
		</style>
		<![endif]-->
		<!--[if IE 7]>
		<link href="<?php bloginfo('template_directory'); ?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
		<![endif]-->	
		<?php endif; ?>
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		
	</head>
	
<body id="ff-<?php echo $fontfamily; ?>" class="<?php echo $option['font_size']; ?> <?php echo $pstyle; ?> <?php echo $bgstyle; ?> <?php if(is_front_page()) { echo 'infuse-home'; } ?> iehandle">


<!--[if gte IE 7]>
<img id="background-img" class="bg" alt="Your Crafts Fair" src="<?php bloginfo('template_directory'); ?>/images/style3/backgrounds/full/bg.jpg" />
<!--<![endif]-->
		
		<!-- Begin Header -->
		
		<div id="header">
			<div class="wrapper">
				<div class="padding">
				
<?php if ($option['site_logo'] == 'true') { ?>
				
					<!-- Begin Logo -->
					
<div class="logo-module">

<div class="headline">
<a class="ir" href="<?php bloginfo('url'); ?>" id="logo" title="Your Crafts Fair">Your Crafts Fair</a> 
</div>
	</div>
					
		<!-- End Logo -->
				<?php } ?>
					
<?php if($option['search_box'] == 'true' || $option['top_blogroll'] == 'true') { ?>
					
					<div id="top-right-surround">
					
						<?php if($option['top_blogroll'] == 'true') { ?>
					
						<!-- Begin Top Blogroll -->
					
						<div id="top-right">
							<div class="moduletable">
								<ul class="menu-nav">						
								</ul>
							</div>
						</div>
						
						<!-- End Top Blogroll -->
						
						<?php } ?>
						
						<?php if($option['search_box'] == 'true') { ?>
						
						<!-- Begin Search -->
						
						<div id="searchmod">
							<div class="moduletable">
								<div id="searchmod-surround">
																
<form name="rokajaxsearch" id="rokajaxsearch" class="blue" action="<?php bloginfo('home'); ?>/" method="get">

<div class="rokajaxsearch">

<input id="roksearch_search_str" name="s" type="text" class="inputbox" value=" <?php _re('Search...'); ?>" onblur="if(this.value=='') this.value=' <?php _re('Search...'); ?>';" onfocus="if(this.value==' <?php _re('Search...'); ?>') this.value='';" />
<input type="hidden" name="task" value="search" />
										</div>
									</form>
									
								</div>
							</div>
						</div>
						
						<!-- End Search -->
						
						<?php } ?>
						
					</div>
					
					<?php } ?>
					
				</div>
			</div>
		</div>
		
		<!-- End Header -->
		
		<!-- Begin Wrapper -->
		
		<div class="wrapper">  
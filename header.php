<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox-1.3.4.css" media="screen" />


<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php 
 wp_enqueue_script('jquery');
 wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
 wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js');
 wp_enqueue_script('easing', get_stylesheet_directory_uri() . '/js/jquery.easing.1.3.js'); 
 wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/js/jquery.fancybox-1.3.4.pack.js');
 
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper">  <!-- wrapper begin -->

<div id="masthead"><!-- masthead begin -->

	<div id="head" class="clearfix">
		<div id="blogname">	
			<?php $mylogo = get_option('uree_logo'); ?>
			<h1 class="logo"><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><img src="<?php echo $mylogo ?>" alt="<?php bloginfo('name');?>"/></a></h1>
		</div>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div><!--end masthead-->
	
	<div id="botmenu" class="clearfix">
		<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
	</div>
	
</div>

<div id="casing">
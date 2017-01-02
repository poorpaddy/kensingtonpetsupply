<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php //comments_popup_script(600, 600); ?>


<!--[if IE]>
	  <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/ie_png.js"></script>
	   <script type="text/javascript">
		   ie_png.fix('.png, .column-left .widget li, .column-right .widget_categories li');
	   </script>
	<![endif]-->
<?php wp_head(); ?>
</head><body>
		
	<div class="right-bg"></div>
	<div class="main-bg"><div class="main"><div class="main-width">
	<?php if (is_home() && !is_paged()) : { ?>
	<style>
	<!--
	.header {height: 466px;}
	-->
	</style>
	<?php } endif; ?>
		<div class="header">
			
		
			<div class="search">
				<?php get_search_form(); ?>
			</div>
			
			<div class="logo">
				<div class="indent">
					<h1 onclick="location.href='<?php echo get_option('home'); ?>/'"><?php bloginfo('name'); ?></h1>
				</div>
			</div>
			
			<?php wp_page_menu('show_home=1&sort_column=menu_order, post_title&link_before=&link_after=');?>
			
			<?php if (is_home() && !is_paged()) : { ?>
			<div class="slogan">
				<div class="indent"><h1><img alt="" src="<?php bloginfo('stylesheet_directory'); ?>/images/slogan.png"></h1></div>
			</div>
			<?php } endif; ?>
			
			
		</div>
		
		<div class="content">
		
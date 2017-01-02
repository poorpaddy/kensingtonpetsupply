<?php	
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => __('Left Sidebar', 'theme820'),
        'before_widget' => '	<div id="%1$s" class="widget %2$s">',
        'before_title' => '		<div class="widget-bg"><div class="title"><div><div><h2>',
		
        'after_title' => '		</h2></div></div></div><div class="indent">',
							
		'after_widget' => '		</div></div></div>',
));


// Search 	
	function widget_theme820_search() {
?>
	<div class="widget " id="search"><div class="widget-bg">
			<div class="title">
				<div><div><h2><?php _e('Search','theme820'); ?></h2></div></div>
			</div>
			<div class="indent">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">	
					<p><input class="text" type="text" value="<?php the_search_query(); ?>" name="s" id="s" /></p>
					<p><input class="but" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/images/search.gif" value="submit" /></p>
				</form>
			</div>
		</div></div>
			
<?php
}
if ( function_exists('register_sidebar_widget') )
	register_sidebar_widget(__('Search'), 'widget_theme820_search');
?>
<!doctype html>
<head <?php language_attributes(); ?>>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php $options = get_option('salient'); ?>

<?php if(!empty($options['responsive']) && $options['responsive'] == 1) { ?>
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
	<meta name="viewport" content="width=device-width" />
<?php } else { ?>
	<meta name="viewport" content="width=1200" />
<?php } ?>	

<!--Shortcut icon-->
<?php if(!empty($options['favicon'])) { ?>
	<link rel="shortcut icon" href="<?php echo $options['favicon']?>" />
<?php } ?>


<title><?php bloginfo('name'); ?> <?php wp_title("|",true); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class('noise'); ?> data-smooth-scrolling="<?php echo $options['smooth-scrolling']; ?>" data-responsive="<?php echo (!empty($options['responsive']) && $options['responsive'] == 1) ? '1'  : '0' ?>" >

<div id="header-space"></div>

<div id="header-outer" data-using-logo="<?php if(!empty($options['use-logo'])) echo $options['use-logo']; ?>" data-logo-height="<?php if(!empty($options['logo-height'])) echo $options['logo-height']; ?>" data-padding="<?php if(!empty($options['header-padding'])) echo $options['header-padding']; ?>" data-header-resize="<?php if(!empty($options['header-resize-on-scroll'])) echo $options['header-resize-on-scroll']; ?>">
	
	<?php get_search_form(); ?>
	
	<header id="top">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col span_3">
					<a id="logo" href="<?php echo home_url(); ?>">
						<?php echo (!empty($options['use-logo'])) ? '<img alt="'. get_bloginfo('name') .'" src="' . $options['logo'] . '" />' : get_bloginfo('name'); ?>
					</a>
				</div><!--/span_3-->
				
				<div class="col span_9 col_last">
					
					<a href="#" id="toggle-nav"></a>
					
					<nav>
						<ul class="sf-menu">	
							<?php 
							if(has_nav_menu('top_nav')) {
							    wp_nav_menu( array('theme_location' => 'top_nav', 'menu' => 'Top Navigation Menu', 'container' => '', 'items_wrap' => '%3$s' ) ); 
							}
							else {
								echo '<li><a href="">No menu assigned!</a></li>';
							}
							?>		
							<!-- <li id="search-btn"><div><a href=""></a></div></li> -->
						</ul>
					</nav>
					
				</div><!--/span_9-->
			
			</div><!--/row-->
			
		</div><!--/container-->
		
	</header>

</div><!--/header-outer-->


<div id="mobile-menu">
	

	<div class="container">
		<ul>
			<?php 
				if(has_nav_menu('top_nav')) {
					
				    wp_nav_menu( array('theme_location' => 'top_nav', 'menu' => 'Top Navigation Menu', 'container' => '', 'items_wrap' => '%3$s' ) ); 
					echo '<li id="mobile-search">  
					<form action="'.home_url().'" method="GET">
			      		<input type="text" name="s" value="" placeholder="'.__('Search..', NECTAR_THEME_NAME) .'" />
					</form> 
					</li>';
				}
				else {
					echo '<li><a href="">No menu assigned!</a></li>';
				}
			?>		
		</ul>
	</div>
	
</div>
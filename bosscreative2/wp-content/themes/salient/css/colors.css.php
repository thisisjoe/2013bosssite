<?php header("Content-type: text/css; charset=utf-8"); 

// Access WordPress 
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];

require_once( $path_to_wp . '/wp-load.php' );

$options = get_option('salient'); 
?>

body a {
	color:<?php echo $options['accent-color']; ?>;
}

header#top nav ul li a:hover, header#top nav .sf-menu li.sfHover > a, header#top nav .sf-menu li.current-menu-item > a,
header#top nav .sf-menu li.current_page_item > a .sf-sub-indicator i, header#top nav .sf-menu li.current_page_ancestor > a .sf-sub-indicator i,
header#top nav ul li a:hover, header#top nav .sf-menu li.sfHover > a, header#top nav .sf-menu li.current_page_ancestor > a, header#top nav .sf-menu li.current-menu-ancestor > a, header#top nav .sf-menu li.current_page_item > a,
body header#top nav .sf-menu li.current_page_item > a .sf-sub-indicator [class^="icon-"], header#top nav .sf-menu li.current_page_ancestor > a .sf-sub-indicator [class^="icon-"],
header#top nav .sf-menu li.current-menu-ancestor > a, header#top nav .sf-menu li.current_page_item > a, .sf-menu li ul li.sfHover > a .sf-sub-indicator [class^="icon-"], 
ul.sf-menu > li > a:hover > .sf-sub-indicator i, ul.sf-menu > li > a:active > .sf-sub-indicator i, ul.sf-menu > li.sfHover > a > .sf-sub-indicator i,
.sf-menu ul li.current_page_item > a , .sf-menu ul li.current-menu-ancestor > a, .sf-menu ul li.current_page_ancestor > a, .sf-menu ul a:focus ,
.sf-menu ul a:hover, .sf-menu ul a:active, .sf-menu ul li:hover > a, .sf-menu ul li.sfHover > a, .sf-menu li ul li a:hover, .sf-menu li ul li.sfHover > a,
#footer-outer a:hover, .recent-posts .post-header a:hover, article.post .post-header a:hover, article.result a:hover,  article.post .post-header h2 a, article.post .post-meta a:hover,
.comment-list .comment-meta a:hover, label span, .wpcf7-form p span, .icon-3x[class^="icon-"], .icon-3x[class*=" icon-"], .circle-border, article.result .title a, .home .blog-recent .span_3 .post-header a:hover,
.home .blog-recent .span_3 .post-header h3 a, #single-below-header a:hover, header#top #logo:hover, .sf-menu > li.current_page_ancestor > a > .sf-sub-indicator [class^="icon-"], .sf-menu > li.current-menu-ancestor > a > .sf-sub-indicator [class^="icon-"],
body #mobile-menu li.open > a [class^="icon-"], .pricing-column h3, .comment-author a:hover
{	
	color:<?php echo $options['accent-color']; ?>!important;
}

header#top nav ul #search-btn a:hover, header#top nav ul li.sfHover #search-btn a:focus, #search-outer > #search #close:hover a,
.orbit-wrapper div.slider-nav span.right, .orbit-wrapper div.slider-nav span.left, .flex-direction-nav a, .jp-play-bar,
.jp-volume-bar-value, .jcarousel-prev:hover, .jcarousel-next:hover, .portfolio-items .work-info-bg, #portfolio-filters a, #portfolio-filters #sort-portfolio,
.container #portfolio-nav #all-items a:hover, #portfolio-nav #prev-link a:hover, #portfolio-nav #next-link a:hover, .portfolio-items .nectar-love:hover, .portfolio-items .nectar-love.loved, .project-attrs li span, .progress li span, 
#footer-outer #footer-widgets .col .tagcloud a:hover, #call-to-action .container a, #sidebar .widget .tagcloud a:hover, article.post .more-link span:hover,
article.post.quote .post-content .quote-inner, article.post.link .post-content .link-inner, #pagination .next a:hover, #pagination .prev a:hover,
.nectar-love:hover, .nectar-love.loved, .comment-list .reply a:hover, input[type=submit]:hover, #footer-outer #copyright li a:hover, .col:hover > [class^="icon-"].icon-3x, .col:hover > [class*=" icon-"].icon-3x,
.col:hover [class^="icon-"].icon-3x, .col:hover a [class*=" icon-"].icon-3x, .toggle.open h3 a, .tabbed > ul li a.active-tab, [class*=" icon-"], .bar_graph li span, .nectar-button, #footer-outer #footer-widgets .col input[type="submit"],
.carousel-prev:hover, .carousel-next:hover, .blog-recent .more-link span:hover, .post-tags a:hover, .pricing-column.highlight h3, #to-top:hover, #to-top.dark:hover, #pagination a.page-numbers:hover,
#pagination span.page-numbers.current, .single-portfolio .facebook-share a:hover, .single-portfolio .twitter-share a:hover, .single-portfolio .pinterest-share a:hover,  
.single-post .facebook-share a:hover, .single-post .twitter-share a:hover, .single-post .pinterest-share a:hover
{
	background-color:<?php echo $options['accent-color']; ?>!important;
}

.col:hover .circle-border, .tabbed > ul li a.active-tab, body .recent_projects_widget a:hover img, .recent_projects_widget a:hover img, #sidebar #flickr a:hover img, 
#footer-outer #flickr a:hover img, #featured article .post-title a:hover, body #featured article .post-title a:hover {
	border-color:<?php echo $options['accent-color']; ?>;
}

.gallery a:hover img {
	border-color:<?php echo $options['accent-color']; ?>!important;
}


<?php if(!empty($options['responsive']) && $options['responsive'] == 1) { ?>
	
	@media only screen 
	and (min-width : 1px) and (max-width : 1000px) {
		
		body #featured article .post-title > a {
			background-color:<?php echo $options['accent-color']; ?>;
		}
		
		body #featured article .post-title > a {
			border-color:<?php echo $options['accent-color']; ?>;
		}
	}

<?php } ?>
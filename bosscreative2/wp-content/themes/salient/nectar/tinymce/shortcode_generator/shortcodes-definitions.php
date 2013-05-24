<?php

#-----------------------------------------------------------------
# Columns
#-----------------------------------------------------------------

//Half
$nectar_shortcodes['header_1'] = array( 
	'type'=>'heading', 
	'title'=>__('Columns', NECTAR_THEME_NAME)
);

$nectar_shortcodes['one_half'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Half (1/2)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);


//Thirds
$nectar_shortcodes['one_third'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Third Column (1/3)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);

$nectar_shortcodes['two_thirds'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Two Thirds Column (2/3)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);


//Fourths
$nectar_shortcodes['one_fourth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Fourth Column (1/4)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);

$nectar_shortcodes['three_fourths'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Three Fourths Column (3/4)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);


//Sixths
$nectar_shortcodes['one_sixth'] = array( 
	'type'=>'checkbox', 
	'title'=>__('One Sixth Column (1/6)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);

$nectar_shortcodes['five_sixths'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Five Sixths Column (5/6)', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'boxed'=>array('type'=>'custom', 'title'=>__('Boxed Column',NECTAR_THEME_NAME)),
		'centered_text'=>array('type'=>'custom', 'title'=>__('Centered Text',NECTAR_THEME_NAME)),
		'last'=>array( 'type'=>'custom', 'title'=>__('Last Column',NECTAR_THEME_NAME), 'desc' => __('Check this for the last column in a row. i.e. when the columns add up to 1.', NECTAR_THEME_NAME))
	)
);


#-----------------------------------------------------------------
# Elements 
#-----------------------------------------------------------------

$nectar_shortcodes['header_6'] = array( 
	'type'=>'heading', 
	'title'=>__('Elements', NECTAR_THEME_NAME )
);

//Heading
$nectar_shortcodes['heading'] = array( 
	'type'=>'simple', 
	'title'=>__('Centered Heading', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'subtitle'=>array('type'=>'text', 'title'=>__('Subtitle', NECTAR_THEME_NAME)) 
	)
);

//Divider
$nectar_shortcodes['divider'] = array( 
	'type'=>'regular', 
	'title'=>__('Divider', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'line'=>array('type'=>'checkbox', 'title'=>__('Show line?', NECTAR_THEME_NAME))
	)
);

//Button
$nectar_shortcodes['button'] = array( 
	'type'=>'radios', 
	'title'=>__('Button', NECTAR_THEME_NAME), 
	'attr'=>array(
		'size'=>array(
			'type'=>'radio', 
			'title'=>__('Size', NECTAR_THEME_NAME), 
			'opt'=>array(
				'small'=>'Small',
				'medium'=>'Medium',
				'large'=>'Large'
			)
		),
		'url'=>array(
			'type'=>'text', 
			'title'=>'Link URL'
		),
		'text'=>array(
			'type'=>'text', 
			'title'=>__('Text', NECTAR_THEME_NAME)
		)
	) 
);


//Icon
$nectar_shortcodes['icon'] = array( 
	'type'=>'regular', 
	'title'=>__('Icon', NECTAR_THEME_NAME), 
	'attr'=>array(
		'size'=>array(
			'type'=>'radio', 
			'title'=>__('Icon Size', NECTAR_THEME_NAME), 
			'desc' => __('Tiny is recommended to be used inline with regular text. <br/> Small is recommended to be used inline right before heading text. <br> Large is recommended to be used at the top of columns.', NECTAR_THEME_NAME),
			'opt'=>array(
				'tiny'=>'Tiny',
				'small'=>'Small',
				'large'=>'Large'
			)
		),
		'icons' => array(
			'type'=>'icons', 
			'title'=>'Icon', 
			'values'=> array(
			  'icon-glass' => 'icon-glass',
			  'icon-music' => 'icon-music',
			  'icon-search' => 'icon-search',
			  'icon-envelope' => 'icon-envelope',
			  'icon-heart' => 'icon-heart',
			  'icon-star' => 'icon-star',
			  'icon-star-empty' => 'icon-star-empty',
			  'icon-user' => 'icon-user',
			  'icon-film' => 'icon-film',
			  'icon-th-large' => 'icon-th-large',
			  'icon-th' => 'icon-th',
			  'icon-th-list' => 'icon-th-list',
			  'icon-ok' => 'icon-ok',
			  'icon-remove' => 'icon-remove',
			  'icon-zoom-in' => 'icon-zoom-in',
			  'icon-zoom-out' => 'icon-zoom-out',
			  'icon-off' => 'icon-off',
			  'icon-signal' => 'icon-signal',
			  'icon-cog' => 'icon-cog',
			  'icon-trash' => 'icon-trash',
			  'icon-home' => 'icon-home',
			  'icon-file' => 'icon-file',
			  'icon-time' => 'icon-time',
			  'icon-road' => 'icon-road',
			  'icon-download-alt' => 'icon-download-alt',
			  'icon-download' => 'icon-download',
			  'icon-upload' => 'icon-upload',
			  'icon-inbox' => 'icon-inbox',
			  'icon-play-circle' => 'icon-play-circle',
			  'icon-repeat' => 'icon-repeat',
			  'icon-refresh' => 'icon-refresh',
			  'icon-list-alt' => 'icon-list-alt',
			  'icon-lock' => 'icon-lock',
			  'icon-flag' => 'icon-flag',
			  'icon-headphones' => 'icon-headphones',
			  'icon-volume-off' => 'icon-volume-off',
			  'icon-volume-down' => 'icon-volume-down',
			  'icon-volume-up' => 'icon-volume-up',
			  'icon-qrcode' => 'icon-qrcode',
			  'icon-barcode' => 'icon-barcode',
			  'icon-tag' => 'icon-tag',
			  'icon-tags' => 'icon-tags',
			  'icon-book' => 'icon-book',
			  'icon-bookmark' => 'icon-bookmark',
			  'icon-print' => 'icon-print',
			  'icon-camera' => 'icon-camera',
			  'icon-font' => 'icon-font',
			  'icon-bold' => 'icon-bold',
			  'icon-italic' => 'icon-italic',
			  'icon-text-height' => 'icon-text-height',
			  'icon-text-width' => 'icon-text-width',
			  'icon-align-left' => 'icon-align-left',
			  'icon-align-center' => 'icon-align-center',
			  'icon-align-right' => 'icon-align-right',
			  'icon-align-justify' => 'icon-align-justify',
			  'icon-list' => 'icon-list',
			  'icon-indent-left' => 'icon-indent-left',
			  'icon-indent-right' => 'icon-indent-right',
			  'icon-facetime-video' => 'icon-facetime-video',
			  'icon-picture' => 'icon-picture',
			  'icon-pencil' => 'icon-pencil',
			  'icon-map-marker' => 'icon-map-marker',
			  'icon-adjust' => 'icon-adjust',
			  'icon-tint' => 'icon-tint',
			  'icon-edit' => 'icon-edit',
			  'icon-share' => 'icon-share',
			  'icon-check' => 'icon-check',
			  'icon-move' => 'icon-move',
			  'icon-step-backward' => 'icon-step-backward',
			  'icon-fast-backward' => 'icon-fast-backward',
			  'icon-backward' => 'icon-backward',
			  'icon-play' => 'icon-play',
			  'icon-pause' => 'icon-pause',
			  'icon-stop' => 'icon-stop',
			  'icon-forward' => 'icon-forward',
			  'icon-fast-forward' => 'icon-fast-forward',
			  'icon-step-forward' => 'icon-step-forward',
			  'icon-eject' => 'icon-eject',
			  'icon-chevron-left' => 'icon-chevron-left',
			  'icon-chevron-right' => 'icon-chevron-right',
			  'icon-plus-sign' => 'icon-plus-sign',
			  'icon-minus-sign' => 'icon-minus-sign',
			  'icon-remove-sign' => 'icon-remove-sign',
			  'icon-ok-sign' => 'icon-ok-sign',
			  'icon-question-sign' => 'icon-question-sign',
			  'icon-info-sign' => 'icon-info-sign',
			  'icon-screenshot' => 'icon-screenshot',
			  'icon-remove-circle' => 'icon-remove-circle',
			  'icon-ok-circle' => 'icon-ok-circle',
			  'icon-ban-circle' => 'icon-ban-circle',
			  'icon-arrow-left' => 'icon-arrow-left',
			  'icon-arrow-right' => 'icon-arrow-right',
			  'icon-arrow-up' => 'icon-arrow-up',
			  'icon-arrow-down' => 'icon-arrow-down',
			  'icon-share-alt' => 'icon-share-alt',
			  'icon-resize-full' => 'icon-resize-full',
			  'icon-resize-small' => 'icon-resize-small',
			  'icon-plus' => 'icon-plus',
			  'icon-minus' => 'icon-minus',
			  'icon-asterisk' => 'icon-asterisk',
			  'icon-exclamation-sign' => 'icon-exclamation-sign',
			  'icon-gift' => 'icon-gift',
			  'icon-leaf' => 'icon-leaf',
			  'icon-fire' => 'icon-fire',
			  'icon-eye-open' => 'icon-eye-open',
			  'icon-eye-close' => 'icon-eye-close',
			  'icon-warning-sign' => 'icon-warning-sign',
			  'icon-plane' => 'icon-plane',
			  'icon-calendar' => 'icon-calendar',
			  'icon-random' => 'icon-random',
			  'icon-comment' => 'icon-comment',
			  'icon-magnet' => 'icon-magnet',
			  'icon-chevron-up' => 'icon-chevron-up',
			  'icon-chevron-down' => 'icon-chevron-down',
			  'icon-retweet' => 'icon-retweet',
			  'icon-shopping-cart' => 'icon-shopping-cart',
			  'icon-folder-close' => 'icon-folder-close',
			  'icon-folder-open' => 'icon-folder-open',
			  'icon-resize-vertical' => 'icon-resize-vertical',
			  'icon-resize-horizontal' => 'icon-resize-horizontal',
			  'icon-bar-chart' => 'icon-bar-chart',
			  'icon-twitter-sign' => 'icon-twitter-sign',
			  'icon-facebook-sign' => 'icon-facebook-sign',
			  'icon-camera-retro' => 'icon-camera-retro',
			  'icon-key' => 'icon-key',
			  'icon-cogs' => 'icon-cogs',
			  'icon-comments' => 'icon-comments',
			  'icon-thumbs-up' => 'icon-thumbs-up',
			  'icon-thumbs-down' => 'icon-thumbs-down',
			  'icon-star-half' => 'icon-star-half',
			  'icon-heart-empty' => 'icon-heart-empty',
			  'icon-signout' => 'icon-signout',
			  'icon-linkedin-sign' => 'icon-linkedin-sign',
			  'icon-pushpin' => 'icon-pushpin',
			  'icon-external-link' => 'icon-external-link',
			  'icon-signin' => 'icon-signin',
			  'icon-trophy' => 'icon-trophy',
			  'icon-github-sign' => 'icon-github-sign',
			  'icon-upload-alt' => 'icon-upload-alt',
			  'icon-lemon' => 'icon-lemon',
			  'icon-phone' => 'icon-phone',
			  'icon-check-empty' => 'icon-check-empty',
			  'icon-bookmark-empty' => 'icon-bookmark-empty',
			  'icon-phone-sign' => 'icon-phone-sign',
			  'icon-twitter' => 'icon-twitter',
			  'icon-facebook' => 'icon-facebook',
			  'icon-github' => 'icon-github',
			  'icon-unlock' => 'icon-unlock',
			  'icon-credit-card' => 'icon-credit-card',
			  'icon-rss' => 'icon-rss',
			  'icon-hdd' => 'icon-hdd',
			  'icon-bullhorn' => 'icon-bullhorn',
			  'icon-bell' => 'icon-bell',
			  'icon-certificate' => 'icon-certificate',
			  'icon-hand-right' => 'icon-hand-right',
			  'icon-hand-left' => 'icon-hand-left',
			  'icon-hand-up' => 'icon-hand-up',
			  'icon-hand-down' => 'icon-hand-down',
			  'icon-circle-arrow-left' => 'icon-circle-arrow-left',
			  'icon-circle-arrow-right' => 'icon-circle-arrow-right',
			  'icon-circle-arrow-up' => 'icon-circle-arrow-up',
			  'icon-circle-arrow-down' => 'icon-circle-arrow-down',
			  'icon-globe' => 'icon-globe',
			  'icon-wrench' => 'icon-wrench',
			  'icon-tasks' => 'icon-tasks',
			  'icon-filter' => 'icon-filter',
			  'icon-briefcase' => 'icon-briefcase',
			  'icon-fullscreen' => 'icon-fullscreen',
			  'icon-group' => 'icon-group',
			  'icon-link' => 'icon-link',
			  'icon-cloud' => 'icon-cloud',
			  'icon-beaker' => 'icon-beaker',
			  'icon-cut' => 'icon-cut',
			  'icon-copy' => 'icon-copy',
			  'icon-paper-clip' => 'icon-paper-clip',
			  'icon-save' => 'icon-save',
			  'icon-sign-blank' => 'icon-sign-blank',
			  'icon-reorder' => 'icon-reorder',
			  'icon-list-ul' => 'icon-list-ul',
			  'icon-list-ol' => 'icon-list-ol',
			  'icon-strikethrough' => 'icon-strikethrough',
			  'icon-underline' => 'icon-underline',
			  'icon-table' => 'icon-table',
			  'icon-magic' => 'icon-magic',
			  'icon-truck' => 'icon-truck',
			  'icon-pinterest' => 'icon-pinterest',
			  'icon-pinterest-sign' => 'icon-pinterest-sign',
			  'icon-google-plus-sign' => 'icon-google-plus-sign',
			  'icon-google-plus' => 'icon-google-plus',
			  'icon-money' => 'icon-money',
			  'icon-caret-down' => 'icon-caret-down',
			  'icon-caret-up' => 'icon-caret-up',
			  'icon-caret-left' => 'icon-caret-left',
			  'icon-caret-right' => 'icon-caret-right',
			  'icon-columns' => 'icon-columns',
			  'icon-sort' => 'icon-sort',
			  'icon-sort-down' => 'icon-sort-down',
			  'icon-sort-up' => 'icon-sort-up',
			  'icon-envelope-alt' => 'icon-envelope-alt',
			  'icon-linkedin' => 'icon-linkedin',
			  'icon-undo' => 'icon-undo',
			  'icon-legal' => 'icon-legal',
			  'icon-dashboard' => 'icon-dashboard',
			  'icon-comment-alt' => 'icon-comment-alt',
			  'icon-comments-alt' => 'icon-comments-alt',
			  'icon-bolt' => 'icon-bolt',
			  'icon-sitemap' => 'icon-sitemap',
			  'icon-umbrella' => 'icon-umbrella',
			  'icon-paste' => 'icon-paste',
			  'icon-lightbulb' => 'icon-lightbulb',
			  'icon-exchange' => 'icon-exchange',
			  'icon-cloud-download' => 'icon-cloud-download',
			  'icon-cloud-upload' => 'icon-cloud-upload',
			  'icon-user-md' => 'icon-user-md',
			  'icon-stethoscope' => 'icon-stethoscope',
			  'icon-suitcase' => 'icon-suitcase',
			  'icon-bell-alt' => 'icon-bell-alt',
			  'icon-coffee' => 'icon-coffee',
			  'icon-food' => 'icon-food',
			  'icon-file-alt' => 'icon-file-alt',
			  'icon-building' => 'icon-building',
			  'icon-hospital' => 'icon-hospital',
			  'icon-ambulance' => 'icon-ambulance',
			  'icon-medkit' => 'icon-medkit',
			  'icon-fighter-jet' => 'icon-fighter-jet',
			  'icon-beer' => 'icon-beer',
			  'icon-h-sign' => 'icon-h-sign',
			  'icon-plus-sign-alt' => 'icon-plus-sign-alt',
			  'icon-double-angle-left' => 'icon-double-angle-left',
			  'icon-double-angle-right' => 'icon-double-angle-right',
			  'icon-double-angle-up' => 'icon-double-angle-up',
			  'icon-double-angle-down' => 'icon-double-angle-down',
			  'icon-angle-left' => 'icon-angle-left',
			  'icon-angle-right' => 'icon-angle-right',
			  'icon-angle-up' => 'icon-angle-up',
			  'icon-angle-down' => 'icon-angle-down',
			  'icon-desktop' => 'icon-desktop',
			  'icon-laptop' => 'icon-laptop',
			  'icon-tablet' => 'icon-tablet',
			  'icon-mobile-phone' => 'icon-mobile-phone',
			  'icon-circle-blank' => 'icon-circle-blank',
			  'icon-quote-left' => 'icon-quote-left',
			  'icon-quote-right' => 'icon-quote-right',
			  'icon-spinner' => 'icon-spinner',
			  'icon-circle' => 'icon-circle',
			  'icon-reply' => 'icon-reply',
			  'icon-github-alt' => 'icon-github-alt',
			  'icon-folder-close-alt' => 'icon-folder-close-alt',
			  'icon-folder-open-alt' => 'icon-folder-open-alt'
			)
		)
	) 
);

//Toggle
$nectar_shortcodes['toggle'] = array( 
	'type'=>'checkbox', 
	'title'=>__('Toggle Panel', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'title'=>array('type'=>'text', 'title'=>__('Title', NECTAR_THEME_NAME)) 
	)
);

//Tabbed Sections
$nectar_shortcodes['tabbed_section'] = array( 
	'type'=>'dynamic', 
	'title'=>__('Tabbed Section', NECTAR_THEME_NAME ), 
	'attr'=>array(
		'tabs'=>array('type'=>'custom')
	)
);

//Bar Graph
$nectar_shortcodes['bar_graph'] = array( 
	'type'=>'dynamic', 
	'title'=>__('Bar Graph', NECTAR_THEME_NAME ), 
	'attr'=>array(
		'bar_graph'=>array('type'=>'custom')
	)
);

//Clients
$nectar_shortcodes['clients'] = array( 
	'type'=>'dynamic', 
	'title'=>__('Clients', NECTAR_THEME_NAME ), 
	'attr'=>array(
		'clients'=>array('type'=>'custom', 'title'  => __('Image',NECTAR_THEME_NAME))
	)
);


//Pricing Table
$nectar_shortcodes['pricing_table'] = array( 
	'type'=>'direct_to_editor', 
	'title'=>__('Pricing Table', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'columns'=>array(
			'type'=>'radio', 
			'title'=>__('Columns', NECTAR_THEME_NAME), 
			'desc' => __('How many columns would you like?', NECTAR_THEME_NAME),
			'opt'=>array(
				'2'=>'Two',
				'3'=>'Three',
				'4'=>'Four',
				'5'=>'Five'
			)
		)
	)
);

//Team Member
$nectar_shortcodes['team_member'] = array( 
	'type'=>'regular', 
	'title'=>__('Team Member', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'image'=>array('type'=>'custom', 'title'  => __('Image',NECTAR_THEME_NAME)),
		'name'=>array('type'=>'text', 'title'=>__('Name', NECTAR_THEME_NAME)),
		'job_position'=>array('type'=>'text', 'title'=>__('Job Position', NECTAR_THEME_NAME)),
		'description'=>array('type'=>'textarea', 'title'=> __('Description', NECTAR_THEME_NAME)),
		'social'=>array('type'=>'textarea', 'title'=>__('Social Media', NECTAR_THEME_NAME), 'desc' => __('Enter any social media links with a comma separated list. e.g. Facebook,http://facebook.com, Twitter,http://twitter.com', NECTAR_THEME_NAME))  
	)
);

//Carousel
$nectar_shortcodes['carousel'] = array( 
	'type'=>'direct_to_editor', 
	'title'=>__('Carousel', NECTAR_THEME_NAME ), 
	'attr'=>array(
		'carousel_title'=>array(
			'type'=>'text', 
			'title'=> __('Carousel Title', NECTAR_THEME_NAME)
		),
		'scroll_speed'=>array(
			'type'=>'text', 
			'title'=> __('Scroll Speed', NECTAR_THEME_NAME),
			'desc' => __('Enter in milliseconds (default is 700)', NECTAR_THEME_NAME),
		),
		'easing'=>array(
			'type'=>'select', 
			'title'=> __('Easing', NECTAR_THEME_NAME), 
			'values'=>array(
				'linear'=>'linear',
				'swing'=>'swing',
				'easeInQuad'=>'easeInQuad',
				'easeOutQuad' => 'easeOutQuad',
				'easeInOutQuad'=>'easeInOutQuad',
				'easeInCubic'=>'easeInCubic',
				'easeOutCubic'=>'easeOutCubic',
				'easeInOutCubic'=>'easeInOutCubic',
				'easeInQuart'=>'easeInQuart',
				'easeOutQuart'=>'easeOutQuart',
				'easeInOutQuart'=>'easeInOutQuart',
				'easeInQuint'=>'easeInQuint',
				'easeOutQuint'=>'easeOutQuint',
				'easeInOutQuint'=>'easeInOutQuint',
				'easeInExpo'=>'easeInExpo',
				'easeOutExpo'=>'easeOutExpo',
				'easeInOutExpo'=>'easeInOutExpo',
				'easeInSine'=>'easeInSine',
				'easeOutSine'=>'easeOutSine',
				'easeInOutSine'=>'easeInOutSine',
				'easeInCirc'=>'easeInCirc',
				'easeOutCirc'=>'easeOutCirc',
				'easeInOutCirc'=>'easeInOutCirc',
				'easeInElastic'=>'easeInElastic',
				'easeOutElastic'=>'easeOutElastic',
				'easeInOutElastic'=>'easeInOutElastic',
				'easeInBack'=>'easeInBack',
				'easeOutBack'=>'easeOutBack',
				'easeInOutBack'=>'easeInOutBack',
				'easeInBounce'=>'easeInBounce',
				'easeOutBounce'=>'easeOutBounce',
				'easeInOutBounce'=>'easeInOutBounce',
			),
			'desc' => '<a href="http://jqueryui.com/resources/demos/effect/easing.html" target="_blank">'. __("Click here",NECTAR_THEME_NAME) .'</a> ' . __("to see examples of these.", NECTAR_THEME_NAME)
		),
	)
);


//Video
$nectar_shortcodes['video'] = array( 
	'type'=>'regular', 
	'title'=>__('Video', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'm4v_url'=>array('type'=>'text', 'title'=>__('M4V File URL', NECTAR_THEME_NAME)),
		'ogv_url'=>array('type'=>'text', 'title'=>__('OGV FILE URL', NECTAR_THEME_NAME)),
		'image'=>array('type'=>'custom', 'title'  => __('Preview Image',NECTAR_THEME_NAME), 'desc' => __('The preview image should be the same dimensions as your video.'),NECTAR_THEME_NAME)
	)
);

//Audio
$nectar_shortcodes['audio'] = array( 
	'type'=>'regular', 
	'title'=>__('Audio', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'mp3_url'=>array('type'=>'text', 'title'=>__('MP3 File URL', NECTAR_THEME_NAME)),
		'oga_url'=>array('type'=>'text', 'title'=>__('OGA File URL', NECTAR_THEME_NAME))
	)
);

#-----------------------------------------------------------------
# Recent Posts/Projects 
#-----------------------------------------------------------------

$nectar_shortcodes['header_7'] = array( 
	'type'=>'heading', 
	'title'=>__('Recent Posts/Work', NECTAR_THEME_NAME )
);

//Recent Posts
$nectar_shortcodes['recent_posts'] = array( 
	'type'=>'direct_to_editor', 
	'title'=>__('Recent Posts', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'title_labels'=>array(
			'type'=>'checkbox', 
			'title'=>__('Enable Title Labels?', NECTAR_THEME_NAME),
			'desc' => __('These labels are defined by you in the "Blog Options" tab of your theme options panel.', NECTAR_THEME_NAME)
		)
	)
);

//Recent Work
$nectar_shortcodes['recent_projects'] = array( 
	'type'=>'direct_to_editor', 
	'title'=>__('Recent Projects', NECTAR_THEME_NAME ), 
	'attr'=>array( 
		'title_labels'=>array(
			'type'=>'checkbox', 
			'title'=>__('Enable Title Labels?', NECTAR_THEME_NAME),
			'desc' => __('These labels are defined by you in the "Portfolio Options" tab of your theme options panel.', NECTAR_THEME_NAME)
		)
	)
);

?>
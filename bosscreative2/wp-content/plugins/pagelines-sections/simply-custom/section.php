<?php
/*
Section: Simply Custom
Author: Higher Ground Studio
Author URI: http://www.highergroundstudio.com
Version: 1.0.1
Description: A simple way to add HTML, CSS, and JS to Pagelines
Long: Simply Custom is a user-friendly, powerful and elegant solution for creating and editing custom HTML, CSS, and Javascript sections. Simply, this is a custom code section. <br><br><a href="http://twitter.com/#!/HighrGrndStudio">Follow me on Twitter (@HighrGrndStudio)</a> for news of next versions and new releases.
Demo: http://highergroundstudio.com/simply-custom-demo/
Class Name: simplyCustom
Cloning: true
*/



/*
@TODO:
Add ability to add js scripts
Add minify for html
Add minify for js
 */
 
 
class simplyCustom extends PageLinesSection {
		/**
		 *
		 * Site Head Section Code 
		 * 
		 * Code added in the 'section_head()' function will be run during the <head> element of your site's
		 * 'front-end' pages.
		 *
		 */
		function section_head(){
			//Setup debug
			$debug = ( ploption('simply_custom_enable_debug', $this->oset) ? true : false );
			$debugMessage = "<!--Simply Custom | CSS NOT Minified-->";
			
			//Add CSS to HEAD
			$css = ploption('simply_custom_css', $this->oset);
			$css_minify = ( ploption('simply_custom_disable_css_minify') ? false : true );
			
			//Check if css minify is off
			if ($css_minify){
				$css = $this->minify($css);
				$debugMessage = ( $debug ? "<!--Simply Custom | CSS Minified-->" : "");
			}
			//Print out the CSS
			if ($css) {
				printf(( $debug ? $debugMessage : "" ) . "<style type='text/css'>{$css}</style>");
			}
		} 
		
		/**
		 *
		 * CSS Minify
		 *
		 */
		 private function minify( $css ) {
			$css = preg_replace( '#\s+#', ' ', $css );
			$css = preg_replace( '#/\*.*?\*/#s', '', $css );
			$css = str_replace( '; ', ';', $css );
			$css = str_replace( ': ', ':', $css );
			$css = str_replace( ' {', '{', $css );
			$css = str_replace( '{ ', '{', $css );
			$css = str_replace( ', ', ',', $css );
			$css = str_replace( '} ', '}', $css );
			$css = str_replace( ';}', '}', $css );

			return trim( $css );
		}


		/**
		 *
		 * Section Template
		 * 
		 */
	 	function section_template( $clone_id = null ) { 
		
			// Setup Options Values
			$html = ( ploption('simply_custom_html', $this->oset) ) ? ploption('simply_custom_html', $this->oset) : false;
			$css = ( ploption('simply_custom_css', $this->oset) ) ? ploption('simply_custom_css', $this->oset) : false;
			$js = ( ploption('simply_custom_js', $this->oset) ) ? ploption('simply_custom_js', $this->oset) : false;
		
			// If no text is set, show the default sections screen to admins and stop process
			if( !$html or !$css or !js ){
				echo setup_section_notify( $this, 'Add Custom HTML, CSS, or JS To Activate<br><em>Note: This only shows to admins</em>' );
				return;
			}
			
			//Print out HTML
			if ($html)
				printf($html);
			
			//Print out JS
			if ($js)
				printf("<script type='text/javascript'>{$js}</script>");
		}
		
		/**
		 *
		 * Section Page Options
		 * 
		 * Section optionator is designed to handle section options.
		 */
		function section_optionator( $settings ){
			
			// Compare w/ Optionator defaults. (Required, but doesn't change -- needed for cloning/special)
			$settings = wp_parse_args($settings, $this->optionator_default);
			
			/**
			 *
			 * Section Page Options
			 * 
			 * Section optionator is designed to handle section cloning.
			 *
			 * @TODO Add ability to add js scripts
			 */
			$opt_array = array(
				'simply_custom_html' => array(
					'default' 		=> '',
					'type' 			=> 'textarea',
					'title' 		=> __( 'Custom HTML', 'simply_custom' ),
					'shortexp'	 	=> __( 'Custom HTML to add', 'simply_custom' ),
				),
				'simply_custom_css' => array(
					'default' 		=> '',
					'type' 			=> 'textarea',
					'title' 		=> __( 'Custom CSS', 'simply_custom' ),
					'shortexp'	 	=> __( 'Custom CSS to add', 'simply_custom' ),
					'exp'			=> __( 'Added in a CSS Style Tag in the HEAD', 'simply_custom' ),
				),
				'simply_custom_js' => array(
					'default' 		=> '',
					'type' 			=> 'textarea',
					'title' 		=> __( 'Custom JS', 'simply_custom' ),
					'shortexp'	 	=> __( 'Custom Javascript to add', 'simply_custom' ),
					'exp'			=> __('Added in a Javascript Script tag<br><br>It is advised to enclose Jquery in <strong>jQuery(document).ready(function($) {<br><em>Your Jquery here</em><br>});</strong>', 'simply_custom'),
				),
				'simply_custom_disable_css_minify' => array(
					'default'	=> false,
					'type'		=> 'check',
					'inputlabel'=> __( 'Disable CSS Minify?', 'simply_custom' ),
					'title'		=> __( 'Disable CSS Minify', 'simply_custom' ),
					'shortexp'	=> __( 'Use this option if you want to disable CSS Minification', 'simply_custom' ),
				),
				'simply_custom_enable_debug' => array(
					'default'	=> false,
					'type'		=> 'check',
					'inputlabel'=> __( 'Enable Debug?', 'simply_custom' ),
					'title'		=> __( 'Debug', 'simply_custom' ),
					'shortexp'	=> __( 'Use this option if you want to enable debug', 'simply_custom' ),
				),
			);

			$settings = array(
				'id' 		=> $this->id.'_meta',
				'name' 		=> $this->name,
				'icon' 		=> $this->icon, 
				'clone_id'	=> $settings['clone_id'], 
				'active'	=> $settings['active']
			);

			register_metatab($settings, $opt_array);
		}

	
	
	} /* End of section class - No closing php tag needed */
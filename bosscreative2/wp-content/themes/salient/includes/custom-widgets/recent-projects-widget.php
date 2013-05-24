<?php


function Recent_Projects_init() {
	register_widget('Recent_Projects_Widget');
}

add_action('widgets_init', 'Recent_Projects_init');


class Recent_Projects_Widget extends WP_Widget {

	function Recent_Projects_Widget() {
		$widget_ops = array('classname' => 'recent_projects_widget', 'description' => __( "The most recent projects on your site.",NECTAR_THEME_NAME));
		$this->WP_Widget('recent-projects', __('Recent Projects',NECTAR_THEME_NAME), $widget_ops);
		$this->alt_option_name = 'recent_projects_widget';

		add_action( 'save_post', array(&$this, 'flush_widget_cache') );
		add_action( 'deleted_post', array(&$this, 'flush_widget_cache') );
		add_action( 'switch_theme', array(&$this, 'flush_widget_cache') );
	}

	function widget($args, $instance) {
		$cache = wp_cache_get('recent_projects_widget', 'widget');

		if ( !is_array($cache) )
			$cache = array();

		if ( isset($cache[$args['widget_id']]) ) {
			echo $cache[$args['widget_id']];
			return;
		}

		ob_start();
		extract($args);

		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Projects',NECTAR_THEME_NAME) : $instance['title']);
		if ( !$number = (int) $instance['number'] )
			$number = 6;
		else if ( $number < 1 )
			$number = 1;
		else if ( $number > 9 )
			$number = 9;

		$r = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => $number));
		if ($r->have_posts()) :
?>
		<?php echo $before_widget; ?>
		<?php if ( $title ) echo $before_title . $title . $after_title; ?>
		<div>
			<?php  while ($r->have_posts()) : $r->the_post(); ?>
			<a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
				<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('portfolio-widget'); 
				} else {
					echo '<img src="'.get_template_directory_uri().'/img/no-portfolio-item-tiny.jpg" alt="no image added yet." />';
				} ?>
				
			</a> 
			<?php endwhile; ?>
		</div>
		<?php echo $after_widget; ?>
<?php
			wp_reset_query();  // Restore global post data stomped by the_post().
		endif;

		$cache[$args['widget_id']] = ob_get_flush();
		wp_cache_add('recent_projects_widget', $cache, 'widget');
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['number'] = (int) $new_instance['number'];
		$this->flush_widget_cache();

		$alloptions = wp_cache_get( 'alloptions', 'options' );
		if ( isset($alloptions['recent_projects_widget']) )
			delete_option('recent_projects_widget');

		return $instance;
	}

	function flush_widget_cache() {
		wp_cache_delete('recent_projects_widget', 'widget');
	}

	function form( $instance ) {
		$title = isset($instance['title']) ? esc_attr($instance['title']) : '';
		if ( !isset($instance['number']) || !$number = (int) $instance['number'] )
			$number = 6;
		else if ( $number < 1 )
			$number = 1;
		else if ( $number > 9 )
			$number = 9;
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', NECTAR_THEME_NAME); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

		<p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Number of projects to show:', NECTAR_THEME_NAME); ?></label>
		<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="2" /><br />
		<small><?php _e('Change in increments of 3 (at most 9)', NECTAR_THEME_NAME); ?></small></p>
<?php
	}
}


?>
<?php 
/*template name: Home - Recent Posts */
get_header(); ?>
	
<?php $options = get_option('salient'); ?>

<div id="featured" data-caption-animation="<?php echo (!empty($options['slider-caption-animation']) && $options['slider-caption-animation'] == 1) ? '1' : '0'; ?>" data-bg-color="<?php if(!empty($options['slider-bg-color'])) echo $options['slider-bg-color']; ?>" data-slider-height="<?php if(!empty($options['slider-height'])) echo $options['slider-height']; ?>" data-animation-speed="<?php if(!empty($options['slider-animation-speed'])) echo $options['slider-animation-speed']; ?>" data-advance-speed="<?php if(!empty($options['slider-advance-speed'])) echo $options['slider-advance-speed']; ?>" data-autoplay="<?php echo $options['slider-autoplay'];?>"> 
	
	<?php 
	 $slides = new WP_Query( array( 'post_type' => 'home_slider', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order' ) ); 
	 if( $slides->have_posts() ) : ?>
	
		<?php while( $slides->have_posts() ) : $slides->the_post(); 
			
			$alignment = get_post_meta($post->ID, '_nectar_slide_alignment', true); 
			
			$video_embed = get_post_meta($post->ID, '_nectar_video_embed', true);
			$video_m4v = get_post_meta($post->ID, '_nectar_video_m4v', true); 
			
			?>
			
			<div class="slide orbit-slide <?php if( !empty($video_embed) || !empty($video_m4v)) { echo 'has-video'; } else { echo $alignment; } ?>">
				
				<?php $image = get_post_meta($post->ID, '_nectar_slider_image', true); ?>
				<article data-background-cover="<?php echo (!empty($options['slider-background-cover']) && $options['slider-background-cover'] == 1) ? '1' : '0'; ?>" style="background-image: url('<?php echo $image; ?>')">
					<div class="container">
						<div class="col span_12">
							<div class="post-title">
								
								<?php 
									if( !empty( $video_embed ) ) {
							             echo '<div class="video">' . stripslashes(htmlspecialchars_decode($video_embed)) . '</div>';
							        } elseif( !empty($video_m4v)) {
							        	 echo '<div class="video">'; 
							            	 nectar_video($post->ID); 
										 echo '</div>'; 
							        }
									
								?>
								
								 <?php 
								 //mobile more info button for video
								 if( !empty($video_embed) || !empty($video_m4v)) { echo '<span class="more-info"><a href="#">More Info</a></span>'; } ?>
								 
								 <?php $caption = get_post_meta($post->ID, '_nectar_slider_caption', true); ?>
								<h2 data-has-caption="<?php echo (!empty($caption)) ? '1' : '0'; ?>"><span>
				        			<?php echo $caption; ?>
								</span></h2>
								
								<?php 
									$button = get_post_meta($post->ID, '_nectar_slider_button', true);
									$button_url = get_post_meta($post->ID, '_nectar_slider_button_url', true);
									
									if(!empty($button)) { ?>
										<a href="<?php echo $button_url; ?>" class="uppercase"><?php echo $button; ?></a>
								 <?php } ?>
								 

							</div><!--/post-title-->
						</div>
					</div>
				</article>
			</div>
		<?php endwhile; ?>
		<?php else: ?>


	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
</div>


<div class="home-wrap">
	
	<div class="container">
		
		<div class="row">
	
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<?php the_content(); ?>
	
			<?php endwhile; endif; ?>
	
		</div><!--/row-->
		
			<?php 
				$posts_page_id = get_option('page_for_posts');
				$posts_page = get_page($posts_page_id);
				$posts_page_title = $posts_page->post_title;
				$posts_page_link = get_page_uri($posts_page_id);
				
				$recent_posts_title_text = (!empty($options['recent-posts-title'])) ? $options['recent-posts-title'] :'Recent Posts';		
				$recent_posts_link_text = (!empty($options['recent-posts-link'])) ? $options['recent-posts-link'] :'View All Posts';	
			?>
			
			<h2 class="uppercase"><?php echo $recent_posts_title_text; ?><a href="<?php echo $posts_page_link; ?>" class="button"> / <?php echo $recent_posts_link_text; ?> </a></h2>
			
			<div class="row blog-recent">
				
				<?php 
			    $recentBlogPosts = array(
			      'showposts' => 4,
			      'ignore_sticky_posts' => 1,
			      'tax_query' => array(
		              array( 'taxonomy' => 'post_format',
		                  'field' => 'slug',
		                  'terms' => array('post-format-link','post-format-quote'),
		                  'operator' => 'NOT IN'
		                  )
		              )
			    );
				query_posts($recentBlogPosts);
				if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="col span_3">
					
					<?php 
					
						if(get_post_format() == 'video'){
							 $video_embed = get_post_meta($post->ID, '_nectar_video_embed', true);
					
				            if( !empty( $video_embed ) ) {
				                echo '<div class="video-wrap">' . stripslashes(htmlspecialchars_decode($video_embed)) . '</div>';
				            } else { 
				                nectar_video($post->ID); 
				            }
						}
						
						else if(get_post_format() == 'audio'){ ?>
							<div class="audio-wrap">		
								<?php nectar_audio($post->ID); ?>
							</div><!--/audio-wrap-->
						<?php }
						
						else if(get_post_format() == 'gallery'){
							
							if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'second-slide')) {
								nectar_gallery($post->ID);
							}
							
							else {
								if ( has_post_thumbnail() ) { echo get_the_post_thumbnail($post->ID, 'full', array('title' => '')); }
							}
									
						}
						
						else {
							if ( has_post_thumbnail() ) { echo '<a href="' . get_permalink() . '">' . get_the_post_thumbnail($post->ID, 'blog', array('title' => '')) . '</a>'; }
						}
					
					?>
	
					<div class="post-header">
						<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
						<?php the_author_posts_link(); ?> | <?php the_category(', '); ?> | <a href="<?php comments_link(); ?>">
						<?php comments_number( __('No Comments',NECTAR_THEME_NAME), __('One Comment',NECTAR_THEME_NAME), '% '. __('Comments',NECTAR_THEME_NAME) ); ?></a>
					</div><!--/post-header-->
					
					<?php the_excerpt(); ?>
					
				</div><!--/span_3-->
				
				<?php endwhile; endif; ?>
		
			</div><!--/blog-recent-->
	
	
	</div><!--/container-->

</div><!--/home-wrap-->

<?php get_footer(); ?>
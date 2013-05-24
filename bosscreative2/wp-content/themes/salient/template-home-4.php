<?php 
/*template name: Home - Slider Only */
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

	</div><!--/container-->

</div><!--/home-wrap-->
	
<?php get_footer(); ?>
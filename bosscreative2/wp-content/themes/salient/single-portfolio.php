<?php get_header(); ?>

<div class="container main-content">
	
	<div class="row">
		<div class="col span_12 section-title project-title <?php if(empty($options['portfolio_social']) || $options['portfolio_social'] == 0 || empty($options['portfolio_date']) || $options['portfolio_date'] == 0 ) echo 'no-date'?>">
			<h1><?php the_title(); ?></h1>
				<?php 
				$options = get_option('salient'); 
				
				if( !empty($options['portfolio_social']) && $options['portfolio_social'] == 1  && !empty($options['portfolio_date']) && $options['portfolio_date'] == 1) { ?>
					<ul class="porject-additional">
						<li>
							<?php the_time('F d, Y'); ?>
						</li>
					</ul><!--project-additional-->
				<?php } ?>
						
			<?php $portfolio_link = get_portfolio_page_link(get_the_ID()); ?>
			
			<div id="portfolio-nav">
				<ul>
					<li id="prev-link"><?php next_post_link('%link'); ?></li>
					<li id="all-items"><a href="<?php echo $portfolio_link; ?>">Back to All Portfolio Items</a></li> 
					<li id="next-link"><?php previous_post_link('%link'); ?></li> 
				</ul>
			</div>
		</div>
	</div>
	
	<div class="row">
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
			<div id="post-area" class="col span_9">
				
				<?php 
				
					$video_embed = get_post_meta($post->ID, '_nectar_video_embed', true);
					$video_m4v = get_post_meta($post->ID, '_nectar_video_m4v', true);
					
					//Gallery
					if(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'second-slide')) {
						nectar_gallery($post->ID);
					}
					
					//Video
					else if( !empty($video_embed) || !empty($video_m4v) ){
						
			            if( !empty( $video_embed ) ) {
			                echo '<div class="video-wrap">' . stripslashes(htmlspecialchars_decode($video_embed)) . '</div>';
			            } else { 
			                nectar_video($post->ID); 
			            }
						
					}
					
					//Regular Featured Img
					else {
						if (has_post_thumbnail()) { echo get_the_post_thumbnail($post->ID, 'full', array('title' => '')); } else {
							echo '<img src="'.get_template_directory_uri().'/img/no-portfolio-item.jpg" alt="no image added yet." />'; 
						}
					}
				?>
				
				<?php
					//extra content 
					$options = get_option('salient'); 
					if(!empty($options['portfolio_extra_content']) && $options['portfolio_extra_content'] == 1) {
						
						$portfolio_extra_content = get_post_meta($post->ID, '_nectar_portfolio_extra_content', true);
						
						if(!empty($portfolio_extra_content)){
							echo '<div id="portfolio-extra">' . do_shortcode($portfolio_extra_content) . '<div class="clear"></div></div>';
						}
					}
				?>
				
				<div class="comments-section">
	   			   <?php comments_template(); ?>
				 </div>   
				 
			</div><!--/span_9-->
			
			
			
			<div id="sidebar" class="col span_3 col_last" data-follow-on-scroll="<?php echo (!empty($options['portfolio_sidebar_follow']) && $options['portfolio_sidebar_follow'] == 1) ? 1 : 0; ?>">
							
				<div id="sidebar-inner">
					
					<div id="project-meta" data-sharing="<?php echo ( !empty($options['portfolio_social']) && $options['portfolio_social'] == 1 ) ? '1' : '0'; ?>">
						
						<ul class="sharing">
							<li>
								<div class="nectar-love-wrap <?php if( $options['portfolio_date'] == 0 && $options['portfolio_social'] == 0 ) echo 'no-border'; ?> <?php if( !empty($options['portfolio_social']) && $options['portfolio_social'] == 1 ) echo 'fadein'; ?>">
									<?php if( function_exists('nectar_love') ) nectar_love(); ?>
								</div><!--/nectar-love-wrap-->
							</li>
							
							<?php if(!empty($options['portfolio_date']) && $options['portfolio_date'] == 1) {
								   if( empty($options['portfolio_social']) || $options['portfolio_social'] == 0 ) { ?>
								   	
									<li>
										<?php the_time('F d, Y'); ?>
									</li>
							
								<?php } 
							    
							    } 
							
							    // portfolio social sharting icons
								if( !empty($options['portfolio_social']) && $options['portfolio_social'] == 1 ) {
										
									//facebook
									if(!empty($options['portfolio-facebook-sharing']) && $options['portfolio-facebook-sharing'] == 1) {
										echo '<li class="facebook-share"><a href="#" title="Share this"><span class="count"></span></a></li>';
									}
									//twitter
									if(!empty($options['portfolio-twitter-sharing']) && $options['portfolio-twitter-sharing'] == 1) {
										echo '<li class="twitter-share"><a href="#" title="Tweet this"><span class="count"></span></a></li>';
									}
									//pinterest
									if(!empty($options['portfolio-pinterest-sharing']) && $options['portfolio-pinterest-sharing'] == 1) {
										echo '<li class="pinterest-share"><a href="#" title="Pin this"><span class="count"></span></a></li>';
									}
									
								}
							?>
						</ul><!--sharing-->
		
						<div class="clear"></div>
					</div><!--project-meta-->
					
					<?php the_content(); ?>
					
					
					<?php 
					$project_attrs = get_the_terms( $post->ID, 'project-attributes' );
					 if (!empty($project_attrs)){ ?>
						<ul class="project-attrs checks">
							<?php 
							foreach($project_attrs as $attr){
								echo '<li>' . $attr->name . '</li>';
							}	 
							?>
						</ul>
					<?php } ?>
				
	
				</div>
				
			</div><!--/sidebar-->
			
		<?php endwhile; endif; ?>
		
	</div>
	
</div><!--/container-->
	
<?php get_footer(); ?>
<?php get_header(); ?>

<?php nectar_page_header($post->ID); ?>

<div class="container main-content">
	
	<?php if(!is_home()) { ?>
		<div class="row">
			<div class="col span_12 section-title blog-title">
				<h1><?php wp_title("",true); ?></h1>
			</div>
		</div>
	<?php } ?>
	
	<div class="row">
		
		<div id="post-area" class="col span_9">
			<?php 
			
			if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<?php get_template_part( 'includes/post-templates/entry', get_post_format() ); ?>

			<?php endwhile; endif; ?>
			
			<?php nectar_pagination(); ?>
			
		</div><!--/span_9-->
		
		<div id="sidebar" class="col span_3 col_last">
			<?php get_sidebar(); ?>
		</div><!--/span_3-->
		
	</div><!--/row-->
	
</div><!--/container-->
	
<?php get_footer(); ?>
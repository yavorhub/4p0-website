<?php get_header(); ?>
	<div class="background-img-blog">
		<div class="background-blog-logo-container">
			<div class="background-blog-logo">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
			</div>
		</div>
	<div class="blog-posts">
		<p class="title-60-short" style="margin-top: 10%;" >BLOG</p>
<?php
				$wpb_all_query = new WP_Query(
					array(
						'post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1,
						'orderby' => 'date', 'order' => 'ASC'
					));
			?>
			<?php if ( $wpb_all_query->have_posts() ) : ?>
						<!-- the loop -->
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<div class="blog-posts-array">
								<div id="the_post_thumbnail">
									<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
									<img src="<?php echo $feat_image;?>" alt="" />
									
								</div>
								<div id="the_permalink" class="title-24">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<p id="the_excerpt" class="normal-text">
									<?php the_excerpt()?>
								</p>
					</div>
						<?php endwhile; ?>
						<!-- end of the loop -->
	
	
	<?php wp_reset_postdata(); ?>
				
				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
		
	</div>
<?php get_footer(); ?>
	</div>
	
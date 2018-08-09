<?php get_header(); ?>
	<?php
	$training_article1['body'] =  get_field('training_article_1_body');
	$training_article1['image'] = get_field('training_article_1_image');
	?>
	
	<div class="background-img-training">
		<div class="background-training-logo-container">
			<div class="background-training-logo">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
			</div>
		</div>
		<article class="news">
			<div>
				<h1 class="title-60-short" >TRAINING</h1>
				<div class="normal-text"><?php echo $training_article1['body'];?></div>
			</div>
			<div>
				<img src="<?php echo $training_article1['image']['sizes']['large'];?>" />
			</div>
		</article>

<?php get_footer(); ?>
	</div>
	
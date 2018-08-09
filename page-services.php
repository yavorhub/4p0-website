<?php get_header(); ?>
<?php
$services_article1['header'] = get_field('services_article_1_header');
$services_article1['body'] = get_field('services_article_1_body');
$services_article1['image'] = get_field('services_article_1_image');
$services_article2['header'] = get_field('services_article_2_header');
$services_article2['body'] = get_field('services_article_2_body');
$services_article2['image'] = get_field('services_article_2_image');
$services_reference['header'] = get_field('services_reference_header');
$services_reference['body'] = get_field('services_reference_body');

?>
<div class="background-img-services">
	<article class="news">
			<div>
				<h1 class="title-60-short" >DIENSTLEISTUNG</h1>
				<h3 class="title-24"><?php echo $services_article1['header'];?></h3>
				<p class="black-dash"></p>
				<div class="normal-text"><?php echo $services_article1['body'];?></div>
			</div>
			<div>
				<img src="<?php echo $services_article1['image']['sizes']['large'];?>" />
			</div>
	</article>

	<div class="background-services-logo-container">
		<div class="background-services-logo">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
	
	<div class="services-container">
		<div style="display:none">
			<h3 class="title-24"><?php echo $services_article2['header'];?></h3>
			<p class="black-dash"></p>
		</div>
		<article class="services">
				<div>
					<img src="<?php echo $services_article2['image']['sizes']['large'];?>" />
				</div>
				<div>
						<h3 class="title-24"><?php echo $services_article2['header'];?></h3>
						<p class="black-dash"></p>
						<div class="normal-text">
							<?php echo $services_article2['body'];?>
						</div>
				</div>
		</article>
	</div>
	<article class="full-width-colored-background" >
		<div>
			<h3 class="title-24"><?php echo $services_reference['header'];?></h3>
			<p class="black-dash"></p>
			<div class="normal-text"><?php echo $services_reference['body'];?></div>
		</div>
	</article>
	<div class="background-services-logo-container-bottom">
		<div class="background-services-logo-bottom">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
<?php get_footer(); ?>
</div>
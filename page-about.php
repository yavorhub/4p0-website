<?php
	/*
	Template Name Page About
	*/
	get_header();
	$membersData = array();
// Restore original Post Data
	
	$args = array (
		'post_type'              => array( 'teammembers' ),
		'post_status'            => array( 'publish' ),
		'nopaging'               => true,
		'order'                  => 'ASC',
		'orderby'                => 'post_date',
	);
	
	// The Query
	$services = new WP_Query( $args );
	
	// Acquire Members Data
	if ( $services->have_posts() ) {
		while ($services->have_posts()) :
			$services->the_post();
			$membersData['name'][] =  get_the_title(); // the name
			$values = get_post_custom(get_the_ID());
			$membersData['thumbnail'][] =  get_the_post_thumbnail(get_the_ID(), array('320','312')); // get the image;
			$membersData['short_bio'][] = $values['short_experience'][0];
			$membersData['accomplishments'][] = $values['accomplishments'][0];
			$membersData['email'][] = $values['email'][0];
		endwhile;
	}
	$membersTotal = count($membersData['name']);
	$aboutUsData = array();
	
// Acquire AboutUs Data
	$services = new WP_Query( "pagename=about" );
	
	// Acquire Members Data
	if ( $services->have_posts() ) {
		while ($services->have_posts()) :
			$services->the_post();
			$aboutUsData['name'][] =  get_the_title(); // the name
			$values = get_post_custom(get_the_ID());
		endwhile;
	}
	
	$article['header'] = get_field('tm_article_header');
	$article['body'] = get_field('tm_article_text');
	$article['image'] = get_field('tm_article_image');
	$customQuote['title'] = get_field('custom_quote_title');
	$customQuote['body'] = get_field('custom_quote_text');

?>
	<div class="background-img-about">
	<article class="news">
		<div>
			<h1 class="title-60-short">ÜBER UNS</h1>
			<div class="normal-text">
				<?php echo $article['body'];?>
			</div>
		</div>
		<div>
			<img src="<?php echo $article['image']['sizes']['large'];?>" alt="AboutUs"/>
		</div>
	</article>
	<div class="background-about-logo-container">
		<div class="background-about-logo">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
	<article class="full-width-colored-background">
		<div>
			<div class="title-24"><?php echo $customQuote['title'];?></div>
			<p class="black-dash"></p>
			<div class="normal-text"><?php echo $customQuote['body'];?></div>
		</div>
	</article>

	<section class="Gallery">
		<div>
			<h3 class="title-24">Team</h3>
			<p class="black-dash"></p>
		</div>
		<section class="TeamImages">
			<?php for($i = 0; $i < $membersTotal; $i ++): ?>
			<div >
				<a href="javascript:displayModal(<?php echo $i; ?>)"><?php echo $membersData['thumbnail'][$i];?></a>
				<h3 class="title-24"><?php echo $membersData['name'][$i];?></h3>
			</div>
			
			<?php endfor;?>
		</section>
	</section>



	<div class="modalBox" id="modalBox" style="opacity:1;"><!--Modal container--></div>
	<!--modal window gallery-->
	<div class="GalleryRotationContainer" ></div>
	<div class="GalleryRotation">
		<div>
			<div id="link-previous">
				<a href="javascript:minusDivs()" >
					<img width="50" height="50"src="<?php  bloginfo('template_url');?>/assets/images/light/long-arrow-left.svg" />
				</a>
			</div>
			<?php for($i = 0; $i< $membersTotal ; $i++):?>
			<div class="MemberCard">
				<div class="MemberCardContainer">
					<div class="member-experience">
						<h3 class="title-24">ERFAHRUNG </h3>
						<div class="normal-text">
							<?php echo $membersData['short_bio'][$i];?>
							<p class="member-email"><a class="link-color" href="mailto:<?php echo $membersData['email'][$i];?>">
									<?php if($membersData['email'][$i]) : ;?>
									<?php echo $membersData['email'][$i];?></a>   <i class="fal fa-long-arrow-right link-color"></i> </p>
									<?php endif;?>
						</div>
						
					</div>
					<div class="member-image">
						<?php echo $membersData['thumbnail'][$i]; ?>
					</div>
					<div class="member-accomplishments">
						<div class="member-accomplishments-inline-element">
							<h3 class="title-24"><?php echo $membersData['name'][$i];?></h3>
							<div class="normal-text"><?php echo $membersData['accomplishments'][$i];?></div>
						</div>
					</div>
				</div>
			</div>
			<?php endfor;?>
		
			<a href="javascript:closeModalButton()" id="CloseModalButton">&#x2A2F;</a>

			<div id="link-next">
				<a href="javascript:plusDivs()">
					<img width="50" height="50"src="<?php  bloginfo('template_url');?>/assets/images/light/long-arrow-right.svg" />
				</a>
			</div>
		</div>
	</div>
	<div class="background-about-logo-container-bottom">
		<div class="background-about-logo-bottom">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
<?php get_footer(); ?>
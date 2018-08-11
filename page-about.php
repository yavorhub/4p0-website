<?php
	/*
	Template Name Page About
	*/
	get_header();
	$teamMemberOne['name'] = get_field('tm_member_one_name');
	$teamMemberOne['image'] = get_field('tm_member_one_image');
	$teamMemberOne['experience'] = get_field('tm_member_one_short_experience');
	$teamMemberOne['email'] = get_field('tm_member_one_email');
	$teamMemberOne['accomplishments'] = get_field('tm_member_one_accomplishments');
	
	$teamMemberTwo['name'] = get_field('tm_member_two_name');
	$teamMemberTwo['image'] = get_field('tm_member_two_image');
	$teamMemberTwo['experience'] = get_field('tm_member_two_short_experience');
	$teamMemberTwo['email'] = get_field('tm_member_two_email');
	$teamMemberTwo['accomplishments'] = get_field('tm_member_two_accomplishments');
	
	$teamMemberThree['name'] = get_field('tm_member_three_name');
	$teamMemberThree['image'] = get_field('tm_member_three_image');
	$teamMemberThree['experience'] = get_field('tm_member_three_short_experience');
	$teamMemberThree['email'] = get_field('tm_member_three_email');
	$teamMemberThree['accomplishments'] = get_field('tm_member_three_accomplishments');
	
	$teamMemberFour['name'] = get_field('tm_member_four_name');
	$teamMemberFour['image'] = get_field('tm_member_four_image');
	$teamMemberFour['experience'] = get_field('tm_member_four_short_experience');
	$teamMemberFour['email'] = get_field('tm_member_four_email');
	$teamMemberFour['accomplishments'] = get_field('tm_member_four_accomplishments');
	
	$teamMemberFive['name'] = get_field('tm_member_five_name');
	$teamMemberFive['image'] = get_field('tm_member_five_image');
	$teamMemberFive['experience'] = get_field('tm_member_five_short_experience');
	$teamMemberFive['email'] = get_field('tm_member_five_email');
	$teamMemberFive['accomplishments'] = get_field('tm_member_five_accomplishments');
	
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
			<div >
				<a href="javascript:displayModal(0)"><img src="<?php echo $teamMemberOne['image']['sizes']['large'];?>" /></a>
				<h3 class="title-24"><?php echo $teamMemberOne['name'];?></h3>
			</div>
			<div >
				<a href="javascript:displayModal(1)"><img src="<?php echo $teamMemberTwo['image']['sizes']['large'];?>" /></a>
				<h3 class="title-24"><?php echo $teamMemberTwo['name'];?></h3>
			</div>
			<?php if($teamMemberThree['name']):?>
				<div>
					<a href="javascript:displayModal(2)"><img src="<?php echo $teamMemberThree['image']['sizes']['large'];?>" /></a>
					<h3 class="title-24"><?php echo $teamMemberThree['name'];?></h3>
				</div>
			<?php endif;?>
			<?php if($teamMemberFour['name']):?>
				<div>
					<a href="javascript:displayModal(3)"><img src="<?php echo $teamMemberFour['image']['sizes']['large'];?>" /></a>
					<h3 class="title-24"><?php echo $teamMemberFour['name'];?></h3>
				</div>
			<?php endif;?>
			<?php if($teamMemberFive['name']):?>
				<div>
					<a href="javascript:displayModal(4)"><img src="<?php echo $teamMemberFive['image']['sizes']['large'];?>" /></a>
					<h3 class="title-24"><?php echo $teamMemberFive['name'];?></h3>
				</div>
			<?php endif;?>
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

			<div class="MemberCard">
				<div class="MemberCardContainer">
					<div class="member-experience">
						<h3 class="title-24">ERFAHRUNG </h3>
						<div class="normal-text">
							<?php echo $teamMemberOne['experience'];?>
						</div>
					</div>
					<div class="member-image">
						<img src="<?php echo $teamMemberOne['image']['sizes']['large']; ?>" />
					</div>
					<div class="member-accomplishments">
						<div class="member-accomplishments-inline-element">
							<h3 class="title-24"><?php echo $teamMemberOne['name'];?></h3>
							<div class="normal-text"><?php echo $teamMemberOne['accomplishments'];?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="MemberCard">
				<div class="MemberCardContainer">
					<div class="member-experience">
						<h3 class="title-24">ERFAHRUNG </h3>
						<div class="normal-text"><?php echo $teamMemberTwo['experience'];?></div>
					</div>
					<div class="member-image">
						<img src="<?php echo $teamMemberTwo['image']['sizes']['large']; ?>" />
					</div>
					<div class="member-accomplishments">
						<div class="member-accomplishments-inline-element">
							<h3 class="title-24"><?php echo $teamMemberTwo['name'];?></h3>
						</div>
					</div>
				</div>
			</div>
			<!--Add condition for team members 3-5 -->
			<?php if($teamMemberThree['name']):?>
				<div class="MemberCard">
					<div class="MemberCardContainer">
						<div class="member-experience">
							<h3 class="title-24">ERFAHRUNG </h3>
							<div class="normal-text"><?php echo $teamMemberThree['experience'];?></div>
						</div>
						<div class="member-image">
							<img src="<?php echo $teamMemberThree['image']['sizes']['large']; ?>" />
						</div>
						<div class="member-accomplishments">
							<div class="member-accomplishments-inline-element">
								<h3 class="title-24"><?php echo $teamMemberThree['name'];?></h3>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
			<?php if($teamMemberFour['name']):?>
				<div class="MemberCard">
					<div class="MemberCardContainer">
						<div class="member-experience">
							<h3 class="title-24">ERFAHRUNG </h3>
							<div class="normal-text"><?php echo $teamMemberFour['experience'];?></div>
						</div>
						<div class="member-image">
							<img src="<?php echo $teamMemberFour['image']['sizes']['large']; ?>" />
						</div>
						<div class="member-accomplishments">
							<div class="member-accomplishments-inline-element">
								<h3 class="title-24"><?php echo $teamMemberFour['name'];?></h3>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
			<?php if($teamMemberFive['name']):?>
				<div class="MemberCard">
					<div class="MemberCardContainer">
						<div class="member-experience">
							<h3 class="title-24">ERFAHRUNG </h3>
							<div class="normal-text"><?php echo $teamMemberFive['experience'];?></div>
						</div>
						<div class="member-image">
							<img src="<?php echo $teamMemberFive['image']['sizes']['large']; ?>" />
						</div>
						<div class="member-accomplishments">
							<div class="member-accomplishments-inline-element">
								<h3 class="title-24"><?php echo $teamMemberFive['name'];?></h3>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
			<a href="javascript:closeModalButton()" id="CloseModalButton">&#x2A2F;</a>

			<div id="link-next">
				<a href="javascript:plusDivs()"  >
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
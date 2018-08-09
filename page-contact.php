<?php get_header(); ?>
<div class="background-img-kontakt">
		<article class="contacts">
			<h1 class="title-60-short" >KONTAKT</h1>
					<div >
						<h3 class="title-24">INFO</h3>
						<div class="black-dash" style="margin-left:0px; width: 27px; height: 2px;"></div>
						<address class="normal-text">
							<p>VIER PUNKT NULL AG<p></p>
							<p>Bubikerstrasse 1, 8645 Rapperswil-Jona</p>
							<p><a href="mailto:office@4p0.ch">office@4p0.ch</a></p>
						</address>
					</div>
					<div>
						<h3 class="title-24">KONTAKTIEREN SIE UNS</h3>
						<form id="theForm" action="javascript:sendEmailFromContactForm()" >
							<fieldset>
								<input id="name" name="name" type="text" placeholder="Name">
							</fieldset>
							<fieldset>
								<input id="email" name="email" type="email" placeholder="Email">
							</fieldset>
				
							<fieldset>
								<textarea id="message" name="message" rows="10" placeholder="Erzählen Sie uns von Ihrer nächsten brillianten Idee"></textarea>
							</fieldset>
				
							<button type="submit" id="contactForm-Submit">SENDEN</button>
						</form>
					</div>
					<div class="google-map"  >
						<div class="mapouter" >
							<div class="gmap_canvas" >
								<iframe width="1080" height="500" id="gmap_canvas"
								        src="https://maps.google.com/maps?q=Bubikerstrasse1%20%208645%20Rapperswil-Jona&t=&z=15&ie=UTF8&iwloc=&output=embed"
								        frameborder="0" scrolling="no" marginheight="0" marginwidth="100">
								
								</iframe>
								<a href="https://www.pureblack.de"></a>
							</div>
							<style>.mapouter{text-align:center;height:500px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1080px;}
							</style></div>
					</div>
		</article>
	<div class="background-contacts-logo-container-bottom">
		<div class="background-contacts-logo-bottom">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
	
<?php get_footer(); ?>
</div>

	
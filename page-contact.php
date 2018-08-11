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
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKTIccZO7M3A_bx166oK9k36Vy6BSotwg&callback=initMap"></script>
			<div id="googleMap">

			</div>
			<script>
				// Initialize and add the map
				function initMap() {
					// The location of Uluru
					var uluru = {lat: -25.344, lng: 131.036};
					// The map, centered at Uluru
					var map = new google.maps.Map(
						document.getElementById('googleMap'), {zoom: 4, center: uluru});
					// The marker, positioned at Uluru
					var marker = new google.maps.Marker({position: uluru, map: map});
				}
			</script>
		</article>
	<div class="background-contacts-logo-container-bottom">
		<div class="background-contacts-logo-bottom">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
	
<?php get_footer(); ?>

</div>

	
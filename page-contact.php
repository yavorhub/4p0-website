<?php get_header(); ?>
<style>
	/* Always set the map height explicitly to define the size of the div
	 * element that contains the map. */
	#map{
		border: 1px solid black;
		position: relative;
		z-index: 3;
	}

	@media screen and (min-width: 320px) and (max-width: 520px) {
		
	}

	@media screen and (min-width: 520px) and (max-width: 1022px) {
	
	}

	@media screen and (min-width: 1022px) and (max-width: 1200px) {
	
	}

	@media screen and (min-width: 1200px) and (max-width: 1440px){
	
	}

	@media screen and (min-width: 1440px){
	
	}

	.map-label-marker{
		margin: 5%;
	}
</style>
<div class="background-img-kontakt">
		<article class="contacts">
			<h1 class="title-60-short" >KONTAKT</h1>
					<div class="contacts-info">
						<h3 class="title-24">INFO</h3>
						<div class="black-dash" style="margin-left:0px; width: 27px; height: 2px;"></div>
						<address class="normal-text">
							<p>VIER PUNKT NULL AG<p></p>
							<p>Bubikerstrasse 1, 8645 Rapperswil-Jona</p>
							<p><a href="mailto:office@4p0.ch">office@4p0.ch</a></p>
						</address>
					</div>
					<div class="contacts-contact-form">
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
			
			<div id="map" ></div>
			<script>
				function initMap() {
					var Zurich = new google.maps.LatLng(47.2411300, 8.8195000);

					var map = new google.maps.Map(document.getElementById("map"),
						{
							zoom: 17,
							center: Zurich,
							mapTypeId: google.maps.MapTypeId.ROADMAP,
						});
					var marker = new google.maps.Marker({
						position: Zurich,
						map: map,
						visible: true,
						icon: {
								url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png",
								labelOrigin: new google.maps.Point(75, 32),
								size: new google.maps.Size(32,32),
								anchor: new google.maps.Point(16,32)
						},
						label: {
							text: '4p0-Elektroplanung',
							color: "black",
							fontWeight: "bold",
							labelClass: 'map-label-marker',
							
						},
						animation: google.maps.Animation.DROP,
					});
					console.log(map);
					console.log(marker);
				}
				
				
			</script>
			<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKTIccZO7M3A_bx166oK9k36Vy6BSotwg&callback=initMap"></script>
		
		</article>
	<div class="background-contacts-logo-container-bottom">
		<div class="background-contacts-logo-bottom">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/Logo-BG.svg" alt="" />
		</div>
	</div>
	
<?php get_footer(); ?>

</div>

	
/* Function to add the title of services container on top of image on services */
	function lessThan520(){
		services[0].getElementsByClassName('black-dash');
	}
	function moreThan520(){

	}
	let titleEl = 0;
window.addEventListener("resize", function() {

		if(window.screen.width < 520){
			let blackDash = $('.services .black-dash');
			blackDash.parent().parent().prepend(blackDash);
			let title = $('.services .title-24')
			title.parent().parent().prepend(title);
			let trainingImage = $('.news-image');
			trainingImage.prev().insertAfter(tr);

		}
		if(window.screen.width > 520){
			console.log(window.screen.width);
			let blackDashEl = document.getElementsByClassName('services-text-container')[0].getElementsByClassName('black-dash');
				if(blackDashEl.length === 0){
					//Services title and black dash tags are not present
					//Add them  to services
					blackDashEl = $('.services-container .black-dash');
					titleEl = $('.services-container .title-24');
					$('.services-text-container').prepend(blackDashEl)
					console.log('inserted tag');
					$('.services-text-container').prepend(titleEl);
					console.log('inserted tag');
				}
			}


	}, false);
if (window.matchMedia("(min-width: 320px) and (max-width: 520px)").matches){
	let blackDash = $('.services .black-dash');
	blackDash.parent().parent().prepend(blackDash);
	let title = $('.services .title-24')
	title.parent().parent().prepend(title);
}

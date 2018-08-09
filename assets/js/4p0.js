
var slideIndex = 0;

function minusDivs(n){
	slideIndex = slideIndex-1;
	if(slideIndex < 0){
		slideIndex = 1;
		return showDivs(slideIndex);
	}
	return showDivs(slideIndex);
}
function plusDivs(n) {
	slideIndex = slideIndex+1;
	if(slideIndex >1){
		slideIndex=0;
		return showDivs(slideIndex)
	}
	return showDivs(slideIndex);
}

function showDivs(n) {
	var i;
	var elements = document.getElementsByClassName("MemberCard");
	for (i = 0; i < elements.length; i++) {
		elements[i].style.display = "none";
	}
	document.getElementsByTagName('body')[0].style.overflow="hidden";
	elements[n].style.display = "inline-block";

}

function displayModal(startFromMember){
	var modalBox = document.getElementById('modalBox');
	var GalleryRotationContaier = document.getElementsByClassName('GalleryRotationContainer')[0];
	var GalleryRotation = document.getElementsByClassName('GalleryRotation')[0];
	GalleryRotationContaier.style.display = "block";
	GalleryRotation.style.display = "inline-block";
	modalBox.style.display="inline-block";
	modalBox.style.opacity=".9";
	showDivs(startFromMember);
}
function closeModalButton(){
	var cancelButton = document.getElementById('CloseModalButton');
	var modalBox = document.getElementById('modalBox');
	var GalleryRotationContaier = document.getElementsByClassName('GalleryRotationContainer')[0];
	var GalleryRotation = document.getElementsByClassName('GalleryRotation')[0];
	GalleryRotationContaier.style.display = "none";
	GalleryRotation.style.display = "none";
	modalBox.style.display="none";
	document.getElementsByTagName('body')[0].style.overflow="scroll";

}

(function() {
	var cancelButton = document.getElementById('CloseModalButton');
	var favDialog = document.getElementById('favDialog');
	var modalBox = document.getElementById('modalBox');


	// Update button opens a modal dialog


	// Form cancel button closes the dialog box
	if(cancelButton != null) {
		cancelButton.addEventListener('click', function () {
			modalBox.style.display = "none";
		});
	}

		$('p').each(function(){
			if($(this).html()=="&nbsp;") {
				$(this).addClass('empty-para');
			}
		});
})();


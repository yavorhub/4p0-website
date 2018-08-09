// hide text in button and show loading animation
$(this).html("<img src='./images/ajax_loader_red_32.gif' />");
function sendEmailFromContactForm() {

	$.post(object_name.templateUrl+'/sendEmail.php',
		{
			name: document.getElementById('name').value,
			email: document.getElementById('email').value,
			message: document.getElementById('message').value,
			submit: true,
		},

		function (data, status) {
		console.log(data);
		console.log(status);
			// hide loading animation
			$("#contactForm-Submit img").animate({
				opacity: 0
			}, 500);

			if (status == "success") {
				console.log('message send')
				$("#contactForm-Submit").animate({
					width: "320px"
				}, 600, function () {
					$("#contactForm-Submit").html("Message sent successful!");
				});
			} else {
				console.log('message was not sent');
				$("#contactForm-Submit").animate({
					width: "320px"
				}, 400, function () {
					$("#contactForm-Submit").html("Message was not sent!");
				});
			}
		});
}
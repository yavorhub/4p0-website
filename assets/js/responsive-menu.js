// Inside of this function, $() will work as an alias for jQuery()
// and other libraries also using $ will not be accessible under this shortcut
	function expandItems() {

		$(".Burger-Type-Navigation").toggle();


		// $(this).css({
		//   display: '-webkit-box',
		//   display: '-webkit-flex',
		//   display: '-moz-flex',
		//   display: '-ms-flexbox',
		//   display: 'flex',
		// });

		// $( ".blocklogix--header__menus" ).slideToggle( "slow", function() {
		//   // if ($(this).is(':visible')) {
		//   //   $(this).css({
		//   //     display: '-webkit-box',
		//   //     display: '-webkit-flex',
		//   //     display: '-moz-flex',
		//   //     display: '-ms-flexbox',
		//   //     display: 'flex',
		//   //   });
		//   // }
		// });

	}

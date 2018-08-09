/* Make the active button bold*/

(function() {
	var links = document.getElementsByClassName("nav-bar")[0].getElementsByTagName("a");
	var path = window.location.href.slice(0,-1);

	var windowpath = path.split("/");
	var linkpath = windowpath[windowpath.length-1];
	var linksPath = ['about', 'services','training','blog','contact'];

	for (var i = 0; i < linksPath.length; i++) {
		if(linksPath[i] === linkpath){
			links[i].classList.add("active");

		}else{
			links[i].classList.remove("active");
		}

		if(path.indexOf('agiles') != "-1"){
			if(links[i].href.indexOf('blog') != "-1"){
				links[i].classList.add("active");
			}else{
				links[i].classList.remove("active");
			}
		}
	}
	if($('.icon-Burger-Navigation').css('display') != 'none'){
		var links = document.getElementsByClassName("Burger-Type-Navigation")[0].getElementsByTagName("a");
		var path = window.location.href.slice(0,-1);

		var windowpath = path.split("/");
		var linkpath = windowpath[windowpath.length-1];
		var linksPath = ['about', 'services','training','blog','contact'];

		for (var i = 0; i < linksPath.length; i++) {
			if(linksPath[i] === linkpath){
				links[i].classList.add("active");

			}else{
				links[i].classList.remove("active");
			}

			if(path.indexOf('agiles') != "-1"){
				if(links[i].href.indexOf('blog') != "-1"){
					links[i].classList.add("active");
				}else{
					links[i].classList.remove("active");
				}
			}
		}
	}

	// your page initialization code here
	// the DOM will be available here

})();
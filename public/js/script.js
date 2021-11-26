/**************************
 *         Nav bar        *
 **************************/


// https://codepen.io/piyushpd/pen/gOYvZPG
// ---------Responsive-navbar-active-animation-----------
function navbarSelection() {
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();

	$(".hori-selector").css({
		"top": itemPosNewAnimTop.top + "px",
		"left": itemPosNewAnimLeft.left + "px",
		// "height": activeWidthNewAnimHeight + "px",
		"width": activeWidthNewAnimWidth + "px"
	});
	$("#navbarSupportedContent").on("click", "li", function(e) {
		$('#navbarSupportedContent ul li').removeClass("active");
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$(".hori-selector").css({
			"top": itemPosNewAnimTop.top + "px",
			"left": itemPosNewAnimLeft.left + "px",
			// "height": activeWidthNewAnimHeight + "px",
			"width": activeWidthNewAnimWidth + "px"
		});
	});
}

$(document).ready(function() {
	setTimeout(function() { navbarSelection(); });
});

$(window).on('resize', function() {
	setTimeout(function() { navbarSelection(); }, 500);
});

$(".navbar-toggler").click(function() {
	$(".navbar-collapse").slideToggle(300);
	setTimeout(function() { navbarSelection(); });
});

function returnPath() {
	var path = window.location.pathname;
	var liSlash = path.lastIndexOf("/");
	var len = path.length;

	if (liSlash + 1 == len) {
		path = path.slice(0, liSlash)
	}

	path = path.split("/").pop();

	// Account for home page with empty path
	if (path == '') {
		return '/';
	} else {
		return path;
	}
}

// --------------add active class-on another-page move----------
jQuery(document).ready(function($) {
	// Account for home page with empty path
	if (returnPath() == '') {
		path = '/';
	} else if (returnPath() == 'connexion') {
		document.querySelector(".container").classList.add("left-panel-active");
	} else if (returnPath() == 'inscription') {
		document.querySelector(".container").classList.add("right-panel-active");
	}

	var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
	// Add active class to target link
	target.parent().addClass('active');
});




/**************************
 *          Bonus         *
 **************************/
if (returnPath() == 'connexion' || returnPath() == 'inscription') {
	document.querySelector('#KillItWithFire').addEventListener('click', function() {
		var KICKASSVERSION = '2.0';
		var s = document.createElement('script');
		s.type = 'text/javascript';
		document.body.appendChild(s);
		s.src = 'https://hi.kickassapp.com/kickass.js';
		void(0);
	});
}
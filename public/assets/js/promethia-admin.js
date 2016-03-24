//PROMETHIA THEME
/*
-------------------------------------------------------
CONTENTS
-------------------------------------------------------
0 - Enhancements
	Tooltips
	Collapsable Toolbar
1 - wow.js
	Scroll Animations
2 - hover-dropdown.js
	Navigation Hover
3 - appear.js
	Counters
*/

/*
0 - Enhancements
*/
//Tooltips
$('[data-toggle="tooltip"]').tooltip();

//Section Backgrounds
$(".img-box, .page-title, .section, .section-bg").each(function() {
	var attr = $(this).attr('data-path');
	if (typeof attr !== typeof undefined && attr !== false) {
		$(this).css('background', 'url('+attr+')');
	}
});

$(document).ready(function () {
	$('[data-toggle="offcanvas"]').click(function () {
    	$('.row-offcanvas').toggleClass('active')
  	});
});

/*
1 - wow.js
Documentation: http://mynameismatthieu.com/WOW/docs.html
*/
//Scroll Animations
new WOW().init({
	boxClass: 'wow',
	animateClass: 'animated',
	offset: 90,
	mobile: false,
	live: true
});

/*
2 - hover-dropdown.js
Documentation: http://cameronspear.com/blog/bootstrap-dropdown-on-hover-plugin/
*/
$('.dropdown-toggle').dropdownHover().dropdown();
$(document).on('click', '.mega-menu .dropdown-menu', function(e) {
	e.stopPropagation()
});

/*
3 - selectik.js
Documentation: https://github.com/Brankub/selectik
*/
$('.select').selectik({
	minScrollHeight: 20
});

/*
4 - appear.js
Documentation: https://github.com/bas2k/jquery.appear/
*/
//Counters
$(".fun-counter").appear(function(){
	var count = $(this);
	count.countTo({
		from: 0,
		to: count.html(),
		speed: 1300,
		refreshInterval: 5
	})
});
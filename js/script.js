/* Author: Lynn Wallenstein */

$(document).ready(function () {
    $('#sites_button img').click(function () {
	    $('ul.sites_menu').slideToggle('medium');
    });

    $("#showcomments").fancybox({
    	'titlePosition'		: 'inside',
    	'transitionIn'		: 'none',
    	'transitionOut'		: 'none'
    });

});














jQuery(document).ready(function($) {
	var menuBtn = $('.menu-icon'), menu = $('.navigation ul');
	menuBtn.click(function() {
		/* Act on the event */
		if (menu.hasClass('show')) {
			menu.removeClass('chow');
		}else
		menu.addClass('schow')
	}
	});

});
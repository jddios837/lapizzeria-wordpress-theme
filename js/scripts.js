$ = jQuery.noConflict();

$(document).ready(function(){
	// alert('Hola');
	$('.mobile-menu a').on('click', function(){
		$('nav.menu-sitio').toggle('slow');
	});

	// accion al rezice en pantalla
	var breakpoint = 768;
	$(window).resize(function() {
		// console.log();
		if($(document).width() >= breakpoint) {
			$('nav.menu-sitio').show();
		} else {
			$('nav.menu-sitio').hide();
		}
	});
});
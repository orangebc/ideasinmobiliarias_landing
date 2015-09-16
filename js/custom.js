(function(){

	$("#cTa").click(function(){
		var head = $(".header");
		$("body, html").animate({
			scrollTop: head
		})
	});

	$(".btn-cta").click(function(){
		$(".main").slideDown();
	});

	$(".main span").click(function(){
		$(".main").slideUp();
	});

	// Aviso de privacidad

	$(".footer__privacy").click(function(){
		$(".avisoDePrivacidad").toggle();
	});

   // Services
   $(".glyphicon-chevron-down").click(function(){
   		$(".item-details").hide();
        $('#' + $(this).attr('data-info')).slideDown();
    });

    $(".glyphicon-remove").click(function(){
   		$(".item-details").slideUp();
    });

    // Form
	$('#actionBuying').change(function(){
		if ($(this).is(':checked')) {
			$("#togglePuebla").slideDown();
			$("#desarrollosPuebla").slideDown();
			$("#toggleMx").slideDown();
			$("#desarrollosMx").slideDown();
		};
	});

	/*$('#formPuebla').change(function(){
		if ($(this).is(':checked')) {
			$("#desarrollosMx").hide();
			$("#desarrollosPuebla").show();

		};
	});

	$('#formMx').change(function(){
		if ($(this).is(':checked')) {
			$("#desarrollosPuebla").hide();
			$("#desarrollosMx").show();

		};
	}); */

	$('#actionSelling').change(function(){
		if ($(this).is(':checked')) {
			$("#togglePuebla").hide();
			$("#desarrollosPuebla").hide();
			$("#toggleMx").hide();
			$("#desarrollosMx").hide();
		};
	});

	$('#actionRent').change(function(){
		if ($(this).is(':checked')) {
			$("#togglePuebla").hide();
			$("#desarrollosPuebla").hide();
			$("#toggleMx").hide();
			$("#desarrollosMx").hide();
		};
	});

})();

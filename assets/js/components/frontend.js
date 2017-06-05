$(function(){

		'use strict';


		//Dahboard
		$('.info-toogle').click(function() {

			$(this).toggleClass('selected').parent().next('.panel-collapse').fadeToggle(200);

				if ($(this).hasClass('selected')) {

						$(this).html('<i class="glyphicon glyphicon-minus"></i>');
				} else {

						$(this).html('<i class="glyphicon glyphicon-plus"></i>');
				}
		});

		

});



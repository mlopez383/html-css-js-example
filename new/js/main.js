$(document).ready(function() {
	//nav bar active item
	$('.nav-item').click(function() {
		$('.nav-item.active').removeClass("active");
		$(this).addClass("active");
	});

	// form submit event
	var form = $('#contactForm'); // contact form
	var submit = $('.submit-btn'); // submit button
	var alert = $('.alert-msg'); // alert div for show alert message
	form.on('submit', function(e) {
		e.preventDefault(); // prevent default form submit
		$.ajax({
			url: 'mail.php', // form action url
			type: 'POST', // form submit method get/post
			dataType: 'html', // request type html/json/xml
			data: form.serialize(), // serialize form data
			beforeSend: function() {
				alert.fadeOut();
				submit.html('Enviando...'); // change submit button text
			},
			success: function(data) {
				alert.html(data).fadeIn(); // fade in response data
				form.trigger('reset'); // reset form
				submit.attr("style", "display: none !important");; // reset submit button text
			},
			error: function(e) {
				console.log(e);
			}
		});
	});
});
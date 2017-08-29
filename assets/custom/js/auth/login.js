// $(document).ready(function() {
// 	$('#frm-login').bind('submit', function(e) {
// 		e.preventDefault();

//   	$('.text-danger').remove();
// 		$('.form-group').removeClass('has-error').removeClass('has-success');

//   	var username = $('#txt-login-username').val();
// 		var password = $('#txt-login-password').val();

// 		if (username == "" || password == "") {
// 			if (username == "") {
// 				$('#txt-login-username').after('<p class="text-danger">Username is required.</p>');
// 				$('#txt-login-username').closest('.form-group').addClass('has-error');
// 			} else {
// 				$('#txt-login-username').find('.text-danger').remove();
// 				$('#txt-login-username').closest('.form-group').removeClass('has-error').removeClass('has-success');
// 			}

// 			if (password == "") {
// 				$('#txt-login-password').after('<p class="text-danger">Password is required.</p>');
// 				$('#txt-login-password').closest('.form-group').addClass('has-error');
// 			} else {
// 				$('#txt-login-password').find('.text-danger').remove();
// 				$('#txt-login-password').closest('.form-group').removeClass('has-error').removeClass('has-success');
// 			}
// 		}

// 		$.ajax({
// 			url: 'auth/login-user.php',
// 			type: 'POST',
// 			data: $(this).serialize(),
// 			success: function(response) {
// 				if (response == "success") {
// 					$('#btn-login').text('').prop('disabled', 'disabled').append('<div class="sk-spinner sk-spinner-circle">'
// 																															 					+ '<div class="sk-circle1 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle2 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle3 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle4 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle5 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle6 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle7 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle8 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle9 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle10 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle11 sk-circle"></div>'
// 																															 					+ '<div class="sk-circle12 sk-circle"></div>'
// 																															 				+ '</div>');
// 					$('#messages').remove();
// 					setTimeout("window.location.href = 'dashboard.php';", 2000);
// 				} else if (response == "") {
// 					$('#messages').remove();
// 				} else {
// 					$('#messages').html('<div class="alert alert-danger" style="text-align: left;"><i class="fa fa-exclamation-triangle"></i> &nbsp; '+response+'</div>');
// 				}
// 			},
// 			error: function(xhr, error, ajaxOptions, thrownError) {
// 				show500();
// 				console.log(xhr.responseText);
// 			}
// 		});
// 	});
// })

function show500() {
	$('#content').empty().html($('#err500').html());
}

$(document).ready(function() {
	var frm_login_validator = $('#frm-login').validate({
		rules: {
			'username': {required: true},
			'password': {required: true}
		},
		messages: {
			'username': 'Please enter username.',
			'password': 'Please provide a password.'
		},
		highlight: function (element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function (element) {
			$(element).closest('.form-group').removeClass('has-error').removeClass('has-success').addClass('has-success');
		},
		errorElement: 'span',
		errorClass: 'help-block',
		errorPlacement: function (error, element) {
			if (element.parent('.input-group').length) {
			    error.insertAfter(element.parent());
			} else {
			    error.insertAfter(element);
			}
		}
	});

	$('#frm-login').on('submit', function(event) {
		event.preventDefault();

		$('#btn-login').text('').prop('disabled', 'disabled').append('<div class="sk-spinner sk-spinner-circle">'
																															 					+ '<div class="sk-circle1 sk-circle"></div>'
																															 					+ '<div class="sk-circle2 sk-circle"></div>'
																															 					+ '<div class="sk-circle3 sk-circle"></div>'
																															 					+ '<div class="sk-circle4 sk-circle"></div>'
																															 					+ '<div class="sk-circle5 sk-circle"></div>'
																															 					+ '<div class="sk-circle6 sk-circle"></div>'
																															 					+ '<div class="sk-circle7 sk-circle"></div>'
																															 					+ '<div class="sk-circle8 sk-circle"></div>'
																															 					+ '<div class="sk-circle9 sk-circle"></div>'
																															 					+ '<div class="sk-circle10 sk-circle"></div>'
																															 					+ '<div class="sk-circle11 sk-circle"></div>'
																															 					+ '<div class="sk-circle12 sk-circle"></div>'
																															 				+ '</div>');

		var valid = $('#frm-login').valid();

		if (!valid) {
			$("#frm-login").find('.alert-danger').hide();
			$('#btn-login').text('Log in').removeAttr('disabled').find('.sk-spinner').remove();
			frm_login_validator.focusInvalid();
			return false;
		};

		// var username = $('#txt-login-username').val();
		// var password = $('#txt-login-password').val();

		$.ajax({
			url: 'auth/login-user.php',
			type: 'POST',
			data: $(this).serialize(),
			success: function(response) {
				if (response == "success") {
					$("#frm-login").find('.alert-danger').hide();

					window.location.href = 'dashboard.php';
					window.location.reload(true);
				} else {
					$('#btn-login').text('Log in').removeAttr('disabled').find('.sk-spinner').remove();
					$("#frm-login").find('.alert-danger').show();
					$("#frm-login").find('.alert-danger span').text(response);
				}
			},
			error: function(xhr, error, ajaxOptions, thrownError) {
				show500();
				console.log(xhr.responseText);
			}
		});
	})
});
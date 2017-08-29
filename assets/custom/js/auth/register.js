$(document).ready(function() {
	$('.i-checks').iCheck({
    radioClass: 'iradio_square-green'
	});

	$('#txt-register-contact-number').inputmask({
	  mask: '9999-999-9999'
	})

	$('#birth_date .input-group.date').datepicker({
    todayBtn: "linked",
    keyboardNavigation: false,
    forceParse: false,
    autoclose: true,
    format: 'yyyy-mm-dd',
	});

	$('.clockpicker').clockpicker();

	$('input').on('ifChecked', function(){
	  $(this).parent().parent().parent().parent().parent().children('.code').slideDown();
	  if ($(this).val() == 2) {
	  	$('.patient').css('display', 'none');
	  	$('.nurse').css('display', 'none');
	  	$('.doctor').css('display', 'block');
	  } else if ($(this).val() == 4) {
	  	$('.nurse').css('display', 'block');
	  	$('.patient').css('display', 'none');
	  	$('.doctor').css('display', 'none');
	  } else if ($(this).val() == 3) {
	  	$('.doctor').css('display', 'none');
	  	$('.nurse').css('display', 'none');
	  	$('.patient').css('display', 'block');
	  }
	});

	$('input').on('ifUnchecked', function(){
	  $(this).parent().parent().parent().parent().parent().children('.code').slideUp();
	});

	var count = 1;
	$('.add-row').on('click', function() {
		count = count + 1;
		var html = '<div class="row" id="row'+count+'">';
      	html += '<div class="col-md-6">';
      		html += '<div class="form-group">';
     			 html += '<label for="ddl-register-affiliation" class="control-label">Affiliation *</label>';
		      html += '<select name="affiliation" class="form-control" id="ddl-register-affiliation">';
			      html += '<option disabled selected>Select</option>';
			      html += '<option value="Estevez Memorial Hospital">Estevez Memorial Hospital</option>';
			      html += '<option value="Ago General Hospital">Ago General Hospital</option>';
			      html += '<option value="Tanchuling Hospital">Tanchuling Hospital</option>';
		      html += '</select>';	
      	html += '</div>';
      html += '</div>';
      html += '<div class="col-md-3">';
        html += '<div class="form-group">';
          html += '<label for="txt-register-affiliation-from" class="control-label">From *</label>';
          html += '<div class="input-group clockpicker'+count+'" data-autoclose="true">';
            html += '<input type="text" class="form-control iyo" id="txt-register-affiliation-from" name="affiliation_from">';
            html += '<span class="input-group-addon">';
                html += '<span class="fa fa-clock-o"></span>';
            html += '</span>';
          html += '</div>';
        html += '</div>';
      html += '</div>';
      html += '<div class="col-md-3">';
        html += '<div class="form-group">';
        	html += '<label for="txt-register-affiliation-to" class="control-label">To *</label>';
          html += '<div class="input-group clockpicker'+count+'" data-autoclose="true">';
            html += '<input type="text" class="form-control" id="txt-register-affiliation-to" name="affiliation_to">';
            html += '<span class="input-group-addon">';
                html += '<span class="fa fa-clock-o"></span>';
            html += '</span>';
          html += '</div>';
        html += '</div>';
      html += '</div>';
      html += '<div class="col-md-6">';
        html += '<div class="form-group">';
        	html += '<label for="ddl-register-affiliation-days" class="control-label">Day(s) *</label>';
          html += '<select name="affiliation_days" class="form-control" id="ddl-register-affiliation-days">';
            html += '<option disabled selected>Select</option>';
            html += '<option value="Monday">Monday</option>';
            html += '<option value="Tuesday">Tuesday</option>';
            html += '<option value="Wednesday">Wednesday</option>';
            html += '<option value="Thursday">Thursday</option>';
            html += '<option value="Friday">Friday</option>';
            html += '<option value="Saturday">Saturday</option>';
            html += '<option value="Sunday">Sunday</option>';
          html += '</select>';
        html += '</div>';
      html += '</div>';
      html += '<div class="col-md-6">';
        html += '<a class="btn btn-danger remove" style="margin-top: 25px;" data-row="row'+count+'"><i class="fa fa-minus"></i></a>';
      html += '</div>';
    html += '</div>';
		$('.add').append(html);
		$(".clockpicker"+count).clockpicker();
	});

	$(document).on('click', '.remove', function() {
		var delete_row = $(this).data("row");
		$('#' + delete_row).remove();
	});

	var frm_register_validator = $('#frm-register').validate({
		rules: {
			'first_name': {required: true},
			'middle_name': {required: true},
			'last_name': {required: true},
			'civil_status': {required: true},
			'contact_number': {
				required: true,
				remote: {
					url: "auth/check-mobile-number.php",
	        type: "post"
				}
			},
			'birth_date': {required: true},
			'sex': {required: true},
			'address': {required: true},
			'job_title': {required: true},
			'licence_number': {required: true},
			'username': {
				required: true,
				minlength: 8,
				remote: {
	        url: "auth/check-username.php",
	        type: "post"
	      }
			},
			'password': {
				required: true,
				minlength: 8,
			},
			'email': {
				required: true,
				email: true,
				remote: {
	        url: "auth/check-email.php",
	        type: "post"
	      }
			},
			'confirm_password': {
				required: true,
				equalTo: "#txt-register-password"
			},
			'affiliation': {required: true},
			'affiliation_to': {required: true},
			'affiliation_from': {required: true},
			'affiliation_days': {required: true}
		},
		messages: {
			username: {
				remote: "Username already used. Please try another one."
			},
			confirm_password: {
				equalTo: "Password did not match."
			},
			contact_number: {
				remote: "Mobile # already used. Please try another one."
			},
			email: {
				remote: "Email already used. Please try another one."
			}
		},
		highlight: function (element) {
			$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		},
		unhighlight: function (element) {
			$(element).closest('.form-group').removeClass('has-error').removeClass('has-success').addClass('has-success');
		},
		errorElement: 'span',
		errorClass: 'text-danger',
		errorPlacement: function (error, element) {
			if (element.parent('.input-group').length) {
			    error.insertAfter(element.parent());
			} else {
			    error.insertAfter(element);
			}
		}
	});

	$('#frm-register').on('submit', function(e) {
		e.preventDefault();

		$('#btn-register').text('').prop('disabled', 'disabled').append('<div class="sk-spinner sk-spinner-circle">'
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

		var valid = $('#frm-register').valid();

		if (!valid) {
			$("#frm-register").find('.alert-danger').hide();
			$('#btn-register').text('Register').removeAttr('disabled').find('.sk-spinner').remove();
			frm_register_validator.focusInvalid();
			return false;
		};

		$.ajax({
			url: 'auth/register-user.php',
			type: 'POST',
			data: $(this).serialize(),
			success: function(response) {
				if (response == "success") {
					$('#frm-register')[0].reset();
					frm_register_validator.resetForm();
					$("#frm-register").find('.alert-danger').hide(); 
					$('#btn-register').text('Register').removeAttr('disabled').find('.sk-spinner').remove();
          swal({
              title: "Congratulations!",
              text: "You have successfully registered! Please click the Log in button to log in.",
              type: "success",
              confirmButtonText: "Log in",
              confirmButtonColor: "#1c84c6"
          	}, function() {
            	window.location = "login.php";
        	});    
				} else {
					$('#btn-register').text('Register').removeAttr('disabled').find('.sk-spinner').remove();
					$("#frm-register").find('.alert-danger').show();
					$("#frm-register").find('.alert-danger span').text(response);
				}
			}
		});
	});
});

function show500() {
	$('#content').empty().html($('#err500').html());
}

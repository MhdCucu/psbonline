$(document).ready(function(){
	// Set active link menu :)
	var str = location.href.toLowerCase();
	$('#nav ul li a').each(function () {
		if (str.indexOf(this.href.toLowerCase()) > -1) {
			$("li.active").removeClass("active");
			$(this).parent().addClass("active");
		}
	});

	$('#login').fancybox({
		type : 'iframe',
		width : 350,
		maxHeight : 300,
	});

	$('#register').fancybox({
		type : 'iframe',
		width : 350,
		maxHeight : 360,
	});

	$('.delete').click(function() {
		alert('test');
		return false;
	});

	$('#currpassword').keyup(function() {
		var password = $(this).val();
		if (password.length >= 5) {
			var dataString = 'password=' + password;
			$.ajax({
				type: 'post',
				url: '/admin/admuser/ajax_currentPassword',
				data: dataString,
				dataType: 'json',
				success: function(result) {
					if (result && result === true) {
						$('#curError').html('Valid Password');
						$('#newpassword').focus();
					} else {
						$('#curError').html('Invalid Password');
						$(this).val('');
					}
				}
			});
		}
	});

	$('#newpassword').keyup(function(){
		var newpassword = $(this).val();
		if (newpassword.length >= 5) {
			$('#newError').html('New Password accepted');
		} else {
			$('#newError').html('Password must more than 5 digit');
		}
	});

	$('#btn_password').click(function() {
		var newpassword = $('#newpassword').val();
		var retpassword = $('#retpassword').val();
		if (retpassword.length >= 5 && retpassword === newpassword) {
			$('#form_password').submit();
		} else {
			$('#retError').html('Retype Password has Invalid Value');
		}
	});
});
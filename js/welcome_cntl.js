$(document).ready(function(){
	var PasswordError = 1;
   
	$("#registerUser").submit( function(){
		event.preventDefault();
		if( PasswordError == 0 )
		{
			$.ajax({
				type: "POST",
				url: "php/signup_control.php",
				data: "frmUsername=" + $('#userEmail').val() + "&frmPassword=" + $('#userPassword').val(),
				success: function(msg){
					alert(msg["res_msg"]);
				}
			});
		}
	});

	$("#userLogin").submit( function (){
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "php/login_control.php",
			data: "lUsername=" + $('#loginEmail').val() + "&lPassword=" + $('#loginPassword').val(),
			dataType: "json",
			success: function(msg){
				if(msg["res_status"] == "T_OK")
				{
					$(location).attr('href', 'pages/main.php');
				}
				else
				{
					alert(msg["res_msg"]);
				}
			}
		});
	});

	$('#userPassword, #confirmPassword').on('keyup', function () {
		if ($('#userPassword').val() == $('#confirmPassword').val()) {
			$('#passwordMessage').html('Matching').css('color', 'green');
			PasswordError = 0;
		} else {
			$('#passwordMessage').html('Not Matching').css('color', 'red');
			PasswordError = 1;
		}
	});
});
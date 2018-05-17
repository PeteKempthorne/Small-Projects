$(document).ready(function() {

	$('#submitcommentlogin').on('click', function() 
	{
		var username = jQuery('#username').val();
		var commentpw = jQuery('#commentpw').val();
			
			$.post('comment-login-process.php', {username: username, commentpw: commentpw}, 
			function(data) 
			{
				//alert(data);
				$("#fizz").empty();
				$("#fizz").append(data);
			});			
			
	});
});
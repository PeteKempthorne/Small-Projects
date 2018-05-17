$(document).ready(function() {
	var x = 0;

	$('#submitchat').on('click', function() 
	{
		var username = jQuery('#username').val();
		var comment = jQuery('#comment').val();
		x++;
		var html = '<div class="chat">';
		var htmlDivEnd = '</div>';
			if(comment == "")
			{
				alert("Enter a comment");
			}
			//username will eventually not be required to be entered so not putting a check here
			else
			{
				$.post('chatprocess.php', {username: username, comment: comment}, 
				function(data) 
				{
					$("#chatarea").append(html);
					$(".chat:last-child").empty();
					$(".chat:last-child").append(data);
					$("#chatarea").append(htmlDivEnd);
				});
			}

	});
});
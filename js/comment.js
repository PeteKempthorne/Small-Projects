$(document).ready(function() {
	var x = 0;

	$('#submitcomment').on('click', function() 
	{
		var username = jQuery('#username').val();
		var comment = jQuery('#comment').val();
		x++;
		var html = '<div class="uName">';
		var html2 = '<div class="comm">';
		var htmlDivEnd = '</div>';
			
			$.post('commentprocess.php', {username: username}, 
			function(data) 
			{
				$("#fizz").append(html);
				//$('.uName').append(x);
				$(".uName:last-child").empty();
				$(".uName:last-child").append(data);
				$("#fizz").append(htmlDivEnd);
			});
			$.post('commentprocess2.php', {comment: comment}, 
			function(data2) 
			{
				$("#fizz").append(html2);
				//$('.comm').append(x);
				$(".comm:last-child").empty();
				$(".comm:last-child").append(data2);				
				$("#fizz").append(htmlDivEnd);
			});	
			
	});
});
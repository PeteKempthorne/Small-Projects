$(document).ready(function() {

	$('#submitdecimals').on('click', function() 
	{
		var pinumber = jQuery('#pinumber').val();
			
			$.post('piprocess.php', {pinumber: pinumber}, 
			function(data) 
			{
				//alert(data);
				$("#result").empty();
				$("#result").append(data);
			});			
			
	});
});
$(document).ready(function() {

	$('#submitnumbers').on('click', function() 
	{
		var numberone = jQuery('#numberone').val();
		var numbertwo = jQuery('#numbertwo').val();
			
			$.post('fizzbuzzprocess.php', {numberone: numberone, numbertwo: numbertwo}, 
			function(data) 
			{
				//alert(data);
				$("#result").empty();
				$("#result").append(data);
			});			
			
	});
});
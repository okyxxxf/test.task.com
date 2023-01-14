$(document).ready(function(){
	$("#formRegistration").submit(function(event){
		event.preventDefault()
		var form_data = $(this).serialize();
		$.ajax({
			url:"/action_ajax.php",
			method: "get",
			data: form_data,
			success:function(data){
				document.querySelector("#message").textContent = data;
			}
		});
	});
	$("#formLogin").submit(function(event){
		event.preventDefault()
		var form_data = $(this).serialize();
		$.ajax({
			url:"/action_ajax.php",
			method: "get",
			data: form_data,
			success:function(data){
				document.querySelector("#message").textContent = data;
				setTimeout(function(){
					window.location.href = 'index.php';
				},5000);
			}
		});
	});
	$("#ExitBtn").submit(function(){
		$.ajax({
			url: "/exit.php",
			method: "get",
			success:function(){
				console.log("cockie clear session abort");
			}
		})
	})
});

$(document).ready(function(){
	$("#formRegistration").submit(function(event){
		event.preventDefault()
		var form_data = $(this).serialize();
		$.ajax({
			url:"/action_ajax.php",
			method: "get",
			data: form_data,
			dataType:"json",
			success:function(data){
				console.log(data);
				if (data.responceCheck == 1){
					location.reload();
				}else{
					document.querySelector("#message").textContent = data.responce;
				}
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
			dataType: "json",
			success:function(data){
				console.log(data);
				if (data.responceCheck == 1){
					location.reload();
				}else{
					document.querySelector("#message").textContent = data.responce;
				}
			}
		});
	});
	$("#ExitBtn").submit(function(){
		ajax_exit();
	})
});

function ajax_exit(){
	$.ajax({
		url: "/exit.php",
		method: "get",
		success:function(){
			console.log("cockie clear session abort");
		}
	});
}

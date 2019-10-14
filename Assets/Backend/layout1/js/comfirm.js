$(document).ready(function(){
	// $(".form-assign").hide();
	var getId = 0;
	$(".assign").click(function(){
		$(".form-assign").show();
		getId = $(this).data("id");
		$(".admin").css('opacity', '0.4');
	});
	$(".cancel").click(function(){
		$(".form-assign").hide();
		$(".admin").css('opacity', '1');
	});
	$(".submit").click(function(){
		name_work = $("#namework").val();
		start = $("#start").val();
		deadline = $("#deadline").val();
		mydata = {
			name_work: name_work,
			start: start,
			deadline:deadline,
			id_user: getId
		};
		 $.ajax({
            type: 'POST',
            url: "index.php?area=Backend&controller=Assignwork&action=assign",
            data: mydata,
            success: function(repsonse) {
            	alert("success");
            	location.reload(); 
            },
            error: function(repsonse) {
            	alert("Fail");
            }
        })
	});

	$(".listassign").click(function(){
		var id_user = $(this).data("id");
		 $.ajax({
            type: 'POST',
            url: "index.php?area=Backend&controller=Assignwork&action=show",
            data: {id_user:id_user},
            success: function(repsonse) {
            	$.each(repsonse, function(key, value){
            		$("#name_work").html("helo");
            	});
            },
            error: function(repsonse) {
            	alert("Fail");
            }
        })
	});
});
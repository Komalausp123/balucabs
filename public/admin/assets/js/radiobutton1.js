$(document).ready(function(){
			//after load will check the checkbox is checked or not
			var check = $("#Store").prop("checked");
			if(check){
				$("#first").addClass("activeTab");
			}
			
			//click on yes
			$("#Store").on("click", function(){
				check = $(this).prop("checked");
				$("#second").removeClass("activeTab");
				$("#first").addClass("activeTab");
				
			})
			//click on No
			$("#Campaign").on("click", function(){
				check = $(this).prop("checked");
				$("#first").removeClass("activeTab");
				$("#second").addClass("activeTab");
				console.log(check);
			})
		});
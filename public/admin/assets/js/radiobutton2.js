$(document).ready(function(){
			//after load will check the checkbox is checked or not
			var check = $("#Transfer").prop("checked");
			if(check){
				$("#third").addClass("activeTab");
			}
			
			//click on yes
			$("#Transfer").on("click", function(){
				check = $(this).prop("checked");
				$("#fourth").removeClass("activeTab");
				$("#third").addClass("activeTab");
				
			})
			//click on No
			$("#Cheque").on("click", function(){
				check = $(this).prop("checked");
				$("#third").removeClass("activeTab");
				$("#fourth").addClass("activeTab");
				console.log(check);
			})
		});
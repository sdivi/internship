$(document).ready(function(e){
	
	$("#loginform").on('submit',function(e){
		
		var message=" ";
		var postdata= $(this).serializeArray();
		var formURL = $(this).attr("action");
		
		$.ajax({
			url      :fromURL ,
            type     :"POST",
            data     :postdata,
            datatype :'text',
            success  :function(data,textStatus,jXHR){
				console.log(data);
				if(data="success"){
					header("Location:Home.php");
				}
				else{
					var s=$("#target");
					s.empty();
					s.replaceWith(data);
				}
			  	
				
			},
            error  :function(data,textStatus,jXHR){
				
				alert("Ajax error");
			}			
			
			
			
		});
		
		
		
		e.preventDefault();
	});
	
	
})
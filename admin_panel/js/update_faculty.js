 
$(function() {       
    $('.image-editor').cropit({         
          exportZoom: 1.25,
          imageBackground: true,
          imageBackgroundBorderWidth: 20,                    
        });

        $('.rotate-cw').click(function() {
          $('.image-editor').cropit('rotateCW');
        });        
    //alert("page loaded");
    $('#update').submit(function(event) {

         var div = document.getElementById("loading");
            div.style.display = "inline";

        var imageData = $('.image-editor').cropit('export');        
        var Name = $("#Name").val();   
        var id = $("#id").val();
		var Position = $("#Position").val();   
        var Cabin = $("#Cabin").val(); 
        var Email = $("#Email").val();       
        var About = $("#About").val(); 
        var Indus = $("#Indus").val(); 
        var Resear = $("#Resear").val(); 
        var Teach = $("#Teach").val(); 
        var Subject = $("#Subject").val(); 
        var Splz = $("#Splz").val(); 
        var Achiev = $("#Achiev").val();
        var Conf = $("#Conf").val();
        var Journ = $("#Journ").val();
        var Proj = $("#Proj").val();       		
        $.ajax({
            type: "POST",
            url:"php/update_faculty.php",
            data:{ 
                "imageData": imageData,                
				"Name": Name,
                "id" : id,
				"Position": Position,
				"Cabin": Cabin,
				"Email": Email,				
				"About": About,
				"Indus": Indus,
				"Resear": Resear,
				"Teach": Teach,
				"Subject": Subject,
				"Splz": Splz,
				"Achiev": Achiev, 
                "Conf": Conf,
                "Journ": Journ,
                "Proj": Proj,
                },success:function(result){                     
                    alert(result);	
                    $('html,body').scrollTop(0);
                    location.reload();            
                   
                                      

                 }

        });
      
    //next line: end of ajax
    });
//next line: end of script
}); 
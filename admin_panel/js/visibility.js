$(function() {  

    $('.checkbox').change(function(){  
    var id = $(this).attr('rel');       
    var div = document.getElementById("loading_" + id);
            div.style.display = "inline";    

        
        var table = $(this).attr('rel2');   
        if(this.checked) {
       var Visibility = 1;
    }   
    else {
        var Visibility = 0;
    }              
        $.ajax({
            type: "POST",
            url:"php/visibility.php",
            data:{                 
                "id": id, 
                "table" : table ,
                "Visibility" : Visibility                             
                },success:function(result){           
                        
                       var div = document.getElementById("loading_" + id);
                       div.style.display = "none";
                 }

        });
    

    //next line: end of ajax
    });
//next line: end of script
}); 
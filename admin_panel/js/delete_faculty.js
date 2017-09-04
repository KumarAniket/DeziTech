$(function() {  

    $('.del_btn').click(function(){
        if (confirm("Are you sure to delete this faculty!") == true) {

        var id = $(this).attr('rel');                    
        $.ajax({
            type: "POST",
            url:"php/delete_faculty.php",
            data:{                 
                "id": id,                               
                },success:function(result){                
                    
                       var element = document.getElementById(id);
                       element.parentNode.removeChild(element);
                 }

        });
    }

    //next line: end of ajax
    });
//next line: end of script
}); 
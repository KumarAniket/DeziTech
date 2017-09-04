$(function() {  

    $('.del_btn').click(function(){
        if (confirm("Are you sure to delete this Student Achievment!") == true) {

        var id = $(this).attr('rel');                    
        $.ajax({
            type: "POST",
            url:"php/delete_stu.php",
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
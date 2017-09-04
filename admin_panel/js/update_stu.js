$(function() {     

    //alert("page loaded");
    $('#update_workshop').submit(function(event) {


        var div = document.getElementById("loading");
            div.style.display = "inline";
       
       $.ajax( {
  type: 'POST',
  url: 'php/update_stu.php',
  data: new FormData( this ),
  processData: false,
  contentType: false,
  cache: false,
  success:function(result){                     
                    alert(result);  
                    $('html,body').scrollTop(0);
                    location.reload();            
                   
                                      

                 }
});

    //next line: end of ajax
    });
//next line: end of script
}); 
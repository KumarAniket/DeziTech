$(function() {     

    //alert("page loaded");
    $('#sendmail').submit(function(event) {


        var div = document.getElementById("loading");
            div.style.display = "inline";
       
       $.ajax( {
  type: 'POST',
  url: 'admin_panel/php/sendmail.php',
  data: new FormData( this ),
  processData: false,
  contentType: false,
  cache: false,
  success:function(result){                     
                    alert(result);                        
                   var div = document.getElementById("loading");
            div.style.display = "none";
                                      

                 }
});

    //next line: end of ajax
    });
//next line: end of script
}); 
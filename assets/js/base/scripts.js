setInterval(function(){
$(document).ready(function(){
 $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "get_online_users.php",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $(".list_onlineusers").html(response);
            //alert(response);
        }
    });
});
},15000);

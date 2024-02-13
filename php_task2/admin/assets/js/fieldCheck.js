
$(document).ready(function(){
    $("#confirm").click(function () {
        var email = $("#email").val();
        var pwd = $("#pwd").val();
        
        $.ajax({
            url: 'fieldCheck.php',
            type: 'POST',  
            data: {
                email: email,
                pwd: pwd
            },
            success: function(response){
                if(response == "fail") {
                    alert('Login fail');
                } else {
                    alert('Login success');
                    window.open("nextpage.php","_self");
                   
                    //header("Location: nextpage.php");
                }
            }
        });
    }); 
});

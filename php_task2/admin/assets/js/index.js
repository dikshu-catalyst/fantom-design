$(document).ready(function(){
    $("#submit").click(function () {
       var item1 = $("#item1").val();
       var item2 = $("#item2").val();
       var item3 = $("#item3").val(); 
       var item4 = $("#item4").val();
       var item5 = $("#item5").val();

        var formData = new FormData();
        formData.append("item1",item1);
        formData.append("item2",item2);
        formData.append("item3",item3);
        formData.append("item4",item4);
        formData.append("item5",item5);
        
        var fileInput = $("#img")[0].files[0];
        formData.append("upload_file",fileInput);
        
        $.ajax({
            type: 'POST',
            url: 'insert.php',
            data: formData,
            contentType: false,
            processData : false,  
            success: function(response) {
                alert(response);
                alert('Data Added Successfully');
            }
        });
    });

});
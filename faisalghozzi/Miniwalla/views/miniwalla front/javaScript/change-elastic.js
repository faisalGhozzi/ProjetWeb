$(document).ready(function(){
    var str = window.location.href;
    var res = str.substr(str.indexOf("=")+1, str.length);

    function load_data(query){
        $.ajax({
            url:"fetch.php?id="+res,
            method:"POST",
            data:{query:query},
            success:function(data)
            {   
                $('#result').html(data);
            }
        });
    }

    $('.color-color').click(function (){
        var ide = $(this).val();
        if(ide != "")
        {
            load_data(ide);
        }
        else{
            load_data();
        }
    });
});
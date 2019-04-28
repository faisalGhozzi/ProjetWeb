/*function searchq(){
    var searchTxt = $("input[name='search']").val();

    $.post("searchColor.php", {searchVal: searchTxt}, function(output) {
        $("#output").html(output);
    });
}*/

$(document).ready(function(){
	searchq();
	
	
	function searchq(searchTxt){		
		$.ajax({
   url:"searchColor.php",
   method:"POST",
   data:{searchVal:searchTxt},
   success:function(data)
   {
    $('#output').html(data);
   }
  });
		
   
}
	
	
	$("input[name='search']").keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   searchq(search);
  }
  else
  {
   searchq();
  }
 });


});
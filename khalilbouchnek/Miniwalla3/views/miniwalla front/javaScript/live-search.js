function searchq(){
    var searchTxt = $("input[name='search']").val();

    $.post("searchColor.php", {searchVal: searchTxt}, function(output) {
        $("#output").html(output);
    });
}
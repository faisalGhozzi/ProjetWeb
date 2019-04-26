function validate_product(){
    var price = document.getElementById("price");
    var promotion = document.getElementById("promotion");
    if ( price == "" || promotion == ""){
        alert("No blank values allowed");
        return false;
    }
    else{
        if(promotion != 1 || promotion != 0){
            return false;
        }
        if(isNaN(price)){
            return false;
        }
        return true;
    }
}

function validate_category(){
    var nom = documents.getElementById("nom");
    if(!nom)
    {
        alert("No blank values allowed");
        return false;
    }
    else{
        return true;
    }
}
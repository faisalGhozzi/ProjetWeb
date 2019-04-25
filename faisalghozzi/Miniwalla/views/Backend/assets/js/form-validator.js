function validate_product(){
    var price = document.getElementById("price");
    var promotion = document.getElementById("promotion");
    var sub;
    if ( price == "" || promotion == ""){
        alert("No blank values allowed");
        return false;
    }
    else{
        if(promotion.length > 3){
            return false;
        }else if(promotion.length > 2){
            sub = promotion.slice(0,2);
        }else{
            sub = promotion.slice(0,1);
        }
        if(isNaN(price) || isNaN(sub)){
            return false;
        }
        if(promotion[2] != "%"){
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
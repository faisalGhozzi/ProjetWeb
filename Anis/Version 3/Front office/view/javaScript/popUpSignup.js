function popUp() {
    document.getElementById("bg-modal").style.display = "flex";	
	
}

function closePopUp() {
    document.getElementById("bg-modal").style.display = "none";
}


function loadData()
{
	alert("LOADED");
	var adress = document.getElementById("adress");
	var gov = document.getElementById("Gov");
	var num = document.getElementById("num");
	
	
	var adressP = document.getElementById("exampleInputEmail1");
	var govP = document.getElementById("exampleInputEmail2");
	var numP = document.getElementById("exampleInputPassword1");
	
	
	adressP.value=adress.innerHTML;
	govP.value=gov.innerHTML;
	numP.value=num.innerHTML;
	
}
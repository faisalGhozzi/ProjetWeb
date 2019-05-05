function test(){
var nom = myForm.username.value;
var pwd = myForm.password.value;

if( nom.length== 0 || pwd.length== 0)
{
alert("Vérifier votre login et votre de mot de passe");
}
else{
var nom = username.substring(0,username.indexOf(pt) );

alert('Bienvenue ' + nom ) ;
window.location="acceuil.php";}
}
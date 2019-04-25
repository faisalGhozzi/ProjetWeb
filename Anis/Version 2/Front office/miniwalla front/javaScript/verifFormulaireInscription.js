function validateForm()
{
    let nom = document.forms["myForm"]["name"].value;
    let letters = /^[A-Za-z]+$/;
    let password = document.forms["myForm"]["pwd"].value;
    let passwordCheck = document.forms["myForm"]["pwdchk"].value;
    if((password == passwordCheck) && (nom.value.match(letters)))
    {
        window.location.herf='../Welcome.html';
    }
}
var email_inp = document.getElementById("email");
var  pass_inp = document.getElementById("password");

var myemail = "sample@gmail.com";
var password = "123456789";

function loginfunction() {
var getemail = email_inp.value;
var getpass = pass_inp.value;

if (getemail === myemail && getpass === password) {
   window.location.href = "card.html";
} else {
    alert("Login Failed");

   email_inp.style="border-color: red; solid red";
    pass_inp.style="border-color: red; solid red";
}
}
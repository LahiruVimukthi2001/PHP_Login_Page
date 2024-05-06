var username = document.forms['form']['username'];
var password = document.forms['form']['password'];

var username_error = document.getElementById('username_error');
var password_error = document.getElementById('password_error');

function validated(){
    if(username.value.length <2)
    {
        username.style.border ="1px solid red";
        username_error.style.display = "bolock";
        email.focus();
        return false;
    }
}
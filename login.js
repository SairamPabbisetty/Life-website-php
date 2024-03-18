function validateform() {
    
    var username = document.myform.username.value;
    var password = document.myform.password.value;

    if(username == "" )
    {
        alert("please enter your username first.");
        myform.username.focus();
        return false;
    }

    if(username.length<6)
    {
        alert("username must be at least of 6 characters.");
        document.myformusername.focus();
        return false;
    }

    if(password == " ")
    {
        alert("please enter your password.");
        document.myform.password.focus();
        return false;
    }
    
    if(password.length<8)
    {
        alert("password must contain at least of 8 digits");
        document.myform.password.focus();
        return false;
    }

    alert("Login successful");
    return true;
}
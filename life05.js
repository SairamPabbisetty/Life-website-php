function validateform() {
    
    var fn = document.myform.First_Name.value;
    var ln = document.myform.Last_Name.value;
    if(fn=="" || fn=="null")
    {
        alert("Please enter your first name");
        document.myform.fn.focus();
        return false;
    }
    if(ln=="" || ln=="null")
    {
        alert("Please enter your last name");
        document.myform.ln.focus();
        return false;
    }

    var mail = document.myform.Email_Id.value;
    if(mail=="" || mail=="null")
    {
        alert("Please enter your email");
        document.myform.mail.focus();
        return false;
    }
    var atpos = mail.indexOf("@");
    var dotpos = mail.lastIndexOf(".");
    if(atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length)
    {
        alert("Not a valid email address");
        return false;
    }

    var mob = /^[6-9]{1}[0-9]{9}$/;
    var numb = document.myform.Mobile_Number.value;
    if(mob.test(numb)==false)
    {
        alert("Invalid mobile number");
        numb.focus();
        return false;
    }

    var pincode = /^[0-9]{6}$/
    var pin = document.myform.Pin_Code.value;
    if(pincode.test(pin)==false)
    {
        alert("Invalid Pincode");
        pin.focus();
        return false;
    }

    alert("Registration successful");
    return true;
}
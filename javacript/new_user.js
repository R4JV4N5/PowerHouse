
function validate(){

    var firstname=document.getElementById("fname")
    var lastname=document.getElementById("lname")
    var phnum=document.getElementById("phno")
    var age=document.getElementById("age")
    var password_1=document.getElementById("pwd_1")
    var password_2=document.getElementById("pwd_2")

    if(firstname.value.trim()=="" || lastname.value.trim()==""){
        alert("fields blank");
        return false
    }
    else if(phnum.value.length>10 || phnum.value.length<10){
        alert("num bank");
        phnum.style.border="solid 3px red";
        return false

    }
    else{
        alert(phnum);
        return true
    }


}
function alphanumeric()
{ 
var name = document.form1.name.value;
var letters = /^[0-9a-z]+$/;
if(name=="")
{
//alert('Your registration number have accepted : you can try another');
//document.form1.text1.focus();
//document.getElementById("text1").style.background =’#ccffcc’;  
//return true;
document.getElementById("text1").innerHTML=" &#10060 Please enter your name"; ;
status=false;
}else{  
document.getElementById("text1").innerHTML="&#9989";  
status=true;
}  
return status;
}
function validate(){  
var letters = /^[0-9a-z]+$/;
var name=document.f1.name.value;  
var passwordlength=document.f1.password.value.length;  
var status=false;  
if(name.value.match(letters)){  
comsole.log(name)
document.getElementById("namelocation").innerHTML=  
"&#10060 Please enter your name";  
status=false;
}else{  
document.getElementById("namelocation").innerHTML=" &#9989";  
status=true;
}  
  
if(passwordlength<6){  
document.getElementById("passwordlocation").innerHTML=  
" <img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Password must be greater than 6";  
status=false; 
}else{  
document.getElementById("passwordlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";  
}  
  
return status;  
} 
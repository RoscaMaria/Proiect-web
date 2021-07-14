function validate2(){

  var phone=document.f2.phone.value;
  var letters = /^[0-9]{10}$/;
  var numeResult = letters.test(phone);
  alert("phone" + numeResult); 
  console.log("nu intra in if");
  //document.getElementById("name").innerHTML= "&#10060 Please enter your name"; 
  //validare numere si litere
  if(numeResult == true)
  {
	  console.log("a intrat in if");
	  document.getElementById("phone").innerHTML= " &#9989";  
  }
  else{
	  console.log("intra in else");
	  document.getElementById("phone").innerHTML="&#10060";
  
  }
  
  var email=document.f2.email.value;
  var letters = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var emailResult = letters.test(email);
  alert("email" + emailResult); 
  console.log("nu intra in if");
  //document.getElementById("name").innerHTML= "&#10060 Please enter your name"; 
  //validare numere si litere
  if(emailResult == true)
  {
	  console.log("a intrat in if");
	  document.getElementById("email").innerHTML= " &#9989";  
  }
  else{
	  console.log("intra in else");
	  document.getElementById("email").innerHTML="&#10060";
  
  }
  
  var password=document.f2.password.value;
  var letters = /^(?=.*[0-9])(?=.*[|])[a-zA-Z0-9|]{7,15}$/;
  var passResult = letters.test(password);
  alert("password" + passResult); 
  console.log("nu intra in if");
  //document.getElementById("name").innerHTML= "&#10060 Please enter your name"; 
  //validare numere si litere
  if(passResult == true)
  {
	  console.log("a intrat in if");
	  document.getElementById("password").innerHTML= " &#9989";  
  }
  else{
	  console.log("intra in else");
	  document.getElementById("password").innerHTML="&#10060";
  
  }
  
  
  
  
  return false;
}
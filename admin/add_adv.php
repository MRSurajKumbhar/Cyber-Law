<?php
require('session.php');
require 'nav.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>add_adv</title>
	<style type="text/css">
		input[type=text] ,input[type=email]
		
			{
    width:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;

		}
		form
		{
			margin: 20px;
		}
		textarea
		{
			 width:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
		}
		#sub {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#sub:hover {
    background-color: #45a049;

}
	</style>
</head>
<body>
<form name="myForm" action="add_adv1.php" method="post" onsubmit="return validateForm(); return address();"> 
	<label for="name">Name</label><br>
	<input type="text" name="name" id="name"><div id="name1" style="color:red;"></div><br>
	<label for="expert">Expert In</label><br> <input type="text" name="expert" id="expert"><div id="expert1" style="color:red;"></div><br>
	<label for="contact">Contact</label><br>
	<input id="contact" type="text" name="mob"><div id="mob1" style="color:red;"></div><br>
	<label for="email">email</label> <br><input type="text" id="email" name="email"><div id="email1" style="color:red;"></div><br>
	<label for="City">City</label><br><input id="City" type="text" name="city"><div id="city1" style="color:red;"></div><br>
	<label for="Address">Address</label><br><textarea id="Address" name="address"></textarea><div id="address1" style="color:red;"></div><br>
	<input id="sub" type="submit" name="submit" value="submit">
</form>
</body>
</html>
 <script type="text/javascript">
 	var d = document.getElementById("add_adv");
d.className += "active";

function validateForm() {
    var x = document.forms["myForm"]["name"].value;
   
   var letters = /^[a-zA-Z ]+$/;
   var whitespace = /^[a-zA-Z']+(\s[a-zA-Z']+){2,2}$/;
   
   if(x.match(letters))
     {
     	if(x.match(whitespace))
     	{
     		
     		expert();
     		return false;
     	}
     	else
     		{
     document.getElementById("name1").innerHTML = "please enter full name";
     return false;
     }
 
     
     }
   else
     {
     document.getElementById("name1").innerHTML = "please enter only characters";
     return false;
     }
 }
 function expert(){
 	var letters = /^[a-zA-Z ]+$/;
 var y = document.getElementById("expert").value;
   if(y.match(letters))
     {
     	
 
      phonenumber();
     }
   else
     {
     document.getElementById("expert1").innerHTML = "please enter only characters";
     return false;
     }

  
}

function phonenumber()
{
	var inputtxt = document.getElementById("contact").value;
  var phoneno = /^\d{10}$/;
  if(inputtxt.match(phoneno))
        {
     email();
        }
      else
        {
        document.getElementById("mob1").innerHTML = "please enter valid mobile number";
        return false;
        }
}
function email()
{
	var inputtxt = document.getElementById("email").value;
  var email = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(inputtxt.match(email))
        {
     city();
        }
      else
        {
        document.getElementById("email1").innerHTML = "please enter valid email id";
        return false;
        }
}

function city()
{
	var inputtxt = document.getElementById("city").value;
  var city =/^[a-zA-Z]+$/;

  if(inputtxt.match(city))
        {
    address();
        }
      else
        {
        document.getElementById("city1").innerHTML = "enter correct city name";
        return false;
        }
}
function address()
{
	var inputtxt = document.getElementById("Address").value;
	if( typeof inputtxt === 'undefined' || !inputtxt )
	{
  var city =/^[a-zA-Z0-9\s,'-]*$/;
  if(inputtxt.match(city))
        {
     return true;
        }
      else
        {
        document.getElementById("address1").innerHTML = "enter correct address";
        return false;
        }
}
else
{
	return false;
}
}
</script>
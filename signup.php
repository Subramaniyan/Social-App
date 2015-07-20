<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
     <link rel="stylesheet" href="style.css" />
	<title>Untitled 2</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#signup").submit(function(){
           var x=$("#p").val();
           var y=$("#cp").val();
           if(x!=y)
            { 
                alert("Password Did not match") 
             return false;
            }
            else
               return true;
        });
        });
    </script>
</head>
<body>
<div id="header" style="height:120px; width:100%; border: 1px solid silver; float::left;background-color: #3B5998;">
<h1 style="color: whitesmoke;font-family:calibri ;font-size: 50px;margin-left: 200px;">MY BOOK</h1>
</div>
<form id="login" method="post" action="login.php">
<label id="lab" >Email ID</label><input type="text" id="mail" name="logemail" required="" class="form-control" style="width: 200px; "/>
<label id="lab1">Password</label><input type="password" id="pass" name="pswd" required="" class="form-control" style="width: 200px; "/>
<input type="submit" value="login" class="btn btn-primary" id="log" />
</form>
<h2 style="color: #428BCA;position:relative;top:-160px;left: 45%;">Sign Up</h2>
<center>
<form id="signup" method="post" name="frm" class="form">
<table class="table" style="font-size: 20px;width:570px;height:380px;">
<tr><td>First Name</td><td><input type="text" name="fnmae" required="" class="form-control" /></td></tr> 
<tr><td>Last Name</td><td><input type="text" name="lname"required="" class="form-control"/></td></tr>
<tr><td>Email ID</td><td><input type="text" name="email" required="" class="form-control"/></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd" id="p" required="" class="form-control"/></td></tr>
<tr><td>Confirm password</td><td><input type="password" id="cp" name="cpwd" required="" class="form-control"/></td></tr>
<tr><td>Contact Number</td><td><input type="text" name="cno" required="" class="form-control"/></td></tr>
<tr><td><input type="radio" name="gen" value="male"/>
Male</td>
<td><input type="radio" name="gen" value="female"/>
Female</td>
</tr>
</table>
<input class="btn btn-primary" type="submit" value="Sign Up" style="margin-top: -19px;" />
</form>
</center>
<?php
require("db.php");
session_start();
if(empty($_POST["fnmae"])==false){
$fn=mysql_real_escape_string($_POST["fnmae"]);
$ln=mysql_real_escape_string($_POST["lname"]);
$email=mysql_real_escape_string($_POST["email"]);
$password=mysql_real_escape_string(md5($_POST["pwd"]));
$gender=mysql_real_escape_string($_POST["gen"]);
$contact=mysql_real_escape_string($_POST["cno"]);
$query=mysql_query("INSERT INTO user(fname,lname,email,password,gender,contact) VALUES('$fn','$ln','$email','$password','$gender','$contact')");
 if(!$query)
  echo mysql_error();
 else
  {
  $_SESSION['user']=$fn." ".$ln; 
  $_SESSION['email']=$email;
  header("location:gettingstarted.php");
  }  
}
?>
</body>
</html>
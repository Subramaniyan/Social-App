<?php
session_start();
require("db.php");
$email=$_SESSION['email'];
$pn=mysql_real_escape_string($_POST["prof"]);
$date=mysql_real_escape_string($_POST["date"]);
$month=mysql_real_escape_string($_POST["month"]);
$year=mysql_real_escape_string($_POST["year"]);
$dob= $date ." ".$month." ".$year;
echo $dob;
$cntry=mysql_real_escape_string($_POST["country"]);
$city=mysql_real_escape_string($_POST["city"]);
$relstatus=mysql_real_escape_string($_POST["relationship"]);
$work=mysql_real_escape_string($_POST["work"]);
$query=mysql_query("INSERT INTO bio(email,pname,dob,country,city,relstatus,work) VALUES('$email','$pn','$dob','$cntry','$city','$relstatus','$work')");
 if(!$query)
  echo mysql_error();
 else
  {
    $_SESSION['profn']=$pn;
    header("location:home.php");
  }  

?>

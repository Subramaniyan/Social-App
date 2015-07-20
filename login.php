<?php 
session_start();
  require("db.php");
    $logemail=$_POST["logemail"];
    $pswd=md5($_POST["pswd"]);
    $query=mysql_query("SELECT * FROM user WHERE email='" . $logemail . "' AND password='" . $pswd ."'") or die(mysql_error());
    $num=mysql_num_rows($query);
    if($num == 1)
    {
		
        $_SESSION['email']=$logemail;
        echo $_SESSION['emailid'];
        header("location:home.php");
    }
    else
       echo mysql_error();
mysql_close();
?>

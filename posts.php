<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
session_start();
$mail=$_SESSION['email'];
require("db.php");
$query = "SELECT id FROM user WHERE email = '" . $mail ."'";
$result=mysql_query($query);
$rw = mysql_fetch_array($result);
$id = $rw['id'];
$stat = $_GET['stat'];
$query = "INSERT INTO posts(pby, post, time) VALUES(" . $id .", '". $stat . "', now())";
mysql_query($query);
$datetime=mysql_query("SELECT time FROM posts WHERE pid='$id'");
$time=mysql_fetch_assoc($datetime);
echo '<div id="feed"> 
     <img id="propic" src="profilepics/'.$_SESSION['profilepic'].'" height="50px" width="50px"/><span id="name" style="margin-top:-80px;" >'.$_SESSION['username'].'</span> 
 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="msg" >'. $stat. '</span></div>';
  echo'<span style="font-size:13px;font-family:Perpetua;position:relative;top:0px;left:70px;color:#428BCA;">Posted on.'.$time['time'].'</span><hr style="width:200%;"/>';
?>
</body>
</html>
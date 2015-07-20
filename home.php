<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
function post() {
				var ajaxRequest;
				ajaxRequest = new XMLHttpRequest();
				ajaxRequest.onreadystatechange = function () {
					 if (ajaxRequest.readyState == 4) {
					 	var ajaxDisplay = document.getElementById('psts');
					 	ajaxDisplay.innerHTML = ajaxRequest.responseText + ajaxDisplay.innerHTML;
					 };
				}
				var status = document.getElementById('status').value;
				var query = "?stat=" + status;
				ajaxRequest.open("GET", "posts.php" + query, false);
				ajaxRequest.send(null);
    
			}

function addFriend(id) {
		var ajaxRequest;
				ajaxRequest = new XMLHttpRequest();
				ajaxRequest.onreadystatechange = function () {
					 if (ajaxRequest.readyState == 4) {
					 	var x = 'span' + id
					 	var d = document.getElementById(x);
					 	//d.innerHTML = ajaxRequest.responseText;
					 	d.style.display = "none";
					 };
				}
				//var status = document.getElementById('status').value;
				var query = "?id=" + id;
				ajaxRequest.open("GET", "addfrnd.php" + query, false);
				ajaxRequest.send(null);
	}

function frndResponse(act,id) {
		var ajaxRequest;
				ajaxRequest = new XMLHttpRequest();
				ajaxRequest.onreadystatechange = function () {
					 if (ajaxRequest.readyState == 4) {
					 	  //var x = "req" + id
					 	 //var d = document.getElementById(x);
					 	//d.innerHTML = ajaxRequest.responseText;
					 	 $("#req"+id).remove();
					 	//alert(d.innerHTML);
                        
					 };
				}
				//var status = document.getElementById('status').value;
                var query = "?id=" + id + "&act=" + act;
				ajaxRequest.open("GET", "frndResp.php" + query, false);
				ajaxRequest.send(null);
	}
$(document).ready(function(){
   $("#req").click(function(){
     $("#request").toggle(); 
   });

});
function showrequest(){
    if($(".reqs").length)
     {
       $("#req").css("background-color","red"); 
     }
     else{
        $("#req").removeAttribute("background-color");
     }
}
</script>
</head>
<body id="bdy" onload="showrequest()">
<div id="wrapper" style="height:1900px; width:100%; border :1px solid  silver; float:left"> 
<div id="header" style="height:100px; width:100%; border: 1px solid silver; float::left;background-color: #3B5998;">
<center><h1 style="color: whitesmoke;font-family:calibri ;font-size: 50px;">MY BOOK</h1></center>
<img  src="images/request.png" alt="" height="35px" width="35px" id="req"  />
<form id="logout" action="logout.php"  > 
<input type="submit" value="logout" style="margin-left:1250px;margin-top:-35px;" class="btn btn-primary"/>
</form>
<div id="detail" style="height:1800px; width:24%; border :1px solid white; margin-top:20px; float:left"> 
<?php
require("db.php");
session_start();
 $mailid=$_SESSION['email'];
 //$name=$_SESSION['profn'];
 $sql=mysql_query("SELECT * FROM bio WHERE email='$mailid'");
 $array=mysql_fetch_assoc($sql);
 $_SESSION['username'] = $array['pname'];
 $dp=mysql_query("SELECT profilepic, id FROM user WHERE email='$mailid'");
 $pic=mysql_fetch_assoc($dp);
 $user_id = $pic['id'];
 $_SESSION['id'] = $user_id;
 $picture=explode('/',$pic['profilepic']);
 $piclocation=end($picture);
 $_SESSION['profilepic']=$piclocation;
 
?>

<div id="pic" height="60%">

<center><h4 style="color: #2A4D77;font-size: 25px;"><?php echo $array['pname'];?></h4>
<?php 
    if(!empty($$pic['profilepic']))
    echo'<img src="profilepics/'.$piclocation.'" height=150px width=150px />';
    else
    echo'<img src="images/man-icon.png" height=150px width=150px />';
?>
<h4 style="color: blue;">ABOUT ME</h4>
<table class="table" width="100px">
<tr><th>Name</th><td><?php echo $array['pname']; ?></td></tr>
<tr><th>DOB</th><td><?php echo strtoupper($array['dob']);?></td></tr>
<tr><th>Country</th><td><?php echo $array['country'];?></td></tr>
<tr><th>City</th><td><?php echo $array['city']; ?></td></tr>
<tr><th>Relationship Info</th><td><?php echo $array['relstatus']; ?></td></tr>
<tr><th>Work</th><td><?php echo $array['work'];?></td></tr>
<tr><th>Contact Mail</th><td><?php echo $mailid; ?></td></tr>
<tr><th>Contact No</th><td><?php echo 978844123; ?></td></tr>
</table>

</center>
</div>
</div>
<div id="post"  style="height:100%; width:50%; border :1px solid silver;margin-top:20px; float:left" >
<h4 style="font-family:Century Gothic;color: #428BCA;">What's hapeening Around?</h4><hr style="margin-top: -5px;"/>
<h5 style="color: blue;margin-top: -15px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Share Your's</h5>
<textarea cols="50" rows="5" id="status" class="form-control" style="width: 450px;height:80px;margin-left:50px;"></textarea>
<div id ="po" >
<input type="submit" value="Post" class="btn btn-primary" style="height: 30px;margin-left: 180px;text-align: center;margin-top:5px; ;" onclick="post()">
</div>
<div id = "psts" style="width: 50%; height: auto;"></div>

<?php

	$query = "SELECT pby, post,time FROM posts order by time desc";
	$res = mysql_query($query);

	while($rw = mysql_fetch_array($res)) {
		$rs = mysql_query("SELECT * FROM friends WHERE f1= (SELECT id FROM user WHERE email = '" . $mailid . "') and f2 = " . $rw['pby']);
		$cnt = mysql_num_rows($rs);
		if($cnt!=0 || $rw['pby']==$user_id) {
			$r = mysql_query("SELECT email,profilepic FROM user WHERE id =" . $rw['pby'] .";");
			$photo = mysql_fetch_array($r);$img=explode('/',$photo['1']);$img=end($img);
			$r = mysql_query("SELECT pname FROM bio WHERE email='" . $photo['0'] . "'");
			$nam = mysql_fetch_array($r);
			
            echo '<div id="feed"> 
     <img id="propic" src="profilepics/'.$img.'" height="50px" width="50px"/><span id="name" >'. $nam['0'] .'</span> 
     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;'. $rw['post'].'</div>';
           echo'<span style="font-size:13px;font-family:Perpetua;position:relative;top:0px;left:70px;color:#428BCA;">Posted            on.'.$rw['time'].'</span><hr/>';

		}


	}
?>

</div>

<div id="users" style="height:1800px; width:24%; border :0px solid silver;margin-top:20px; float:left;padding:20px;">
<center><h4 style="color: #428BCA;margin-top: -10px;">People using MyBook</h4><hr style="width: 300px;margin-top: 0px;background-color:black;"/></center>

<?php
	
$res = mysql_query("SELECT * FROM user WHERE id not in (SELECT f2 FROM friends WHERE f1 = ".$user_id.")");


while($usr = mysql_fetch_array($res)) {
	if($usr['id']==$user_id)
		continue;
        $profileimg=$usr['profilepic'];
        $picest=explode('/',$profileimg);
        $pimg=end($picest);
	$qq = "SELECT * FROM requests WHERE fromid in (" . $usr['id'] . ", " . $user_id . ") and toid in (" . $usr['id'] . ", " .   $user_id . ")";
	$rr = mysql_query($qq);
	$no = mysql_num_rows($rr);
	if($no)
		continue;
	$rs = mysql_query("SELECT pname FROM bio WHERE email = '" . $usr['email'] . "'");
	$nam = mysql_fetch_array($rs);

	echo '<div style=" background-color:width: 96%; height: 120px; border: 1px solid white;" id="'. $usr['id'] .'">
	<img id="propic" src="profilepics/'.$pimg.'" height="70px" width="70px"/><span id="name"  style="position:relative;top:     -20px;" >'. $nam['0'] .'</span> <br />
    <br /><button class="btn btn-primary" style="margin-left:35%;border-radius:3px;margin-top:-50px" ><span id="span'. $usr[    'id'] .'"  onclick="addFriend(\'' . $usr['id'] . '\')">+ Add as friend!</span></button></div><hr style="width: 300px        ;margin-top: 0px;background-color:black;"/><br />';
}

?>
 </div>
<div id="request" style="background-color: #3B5998;">
<center>
<h4 style="color: whitesmoke;">REQUESTS</h4></center>
<?php
    $res = mysql_query("SELECT * FROM requests WHERE toid = " . $user_id . ";");
    
	while($req = mysql_fetch_array($res)) {
		$rs = mysql_query("SELECT fname,profilepic FROM user WHERE id = " . $req['fromid'] . ";");
		$nm = mysql_fetch_array($rs);
        $reimg=explode('/',$nm['profilepic']);
        $reimg=end($reimg);
        
		echo'<div class="reqs" id="req'.$req['fromid'].'" ><img id="reqpic" src="profilepics/'.$reimg.'" height="70px" width="70px" /><span id="reqname" >'.$nm['fname'].'</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="Yes" class="acc" style="height:24px;" onclick="frndResponse(\'acc\', \'' . $req['fromid'] . '\')"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="No" class="acc" style="height:24px;" onclick="frndResponse(\'rej\', \'' . $req['fromid'] . '\')"/></div>';
}

?>
</div>
</div>
</body>
</html>

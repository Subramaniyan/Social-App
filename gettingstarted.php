<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="lolkittens" />
<link rel="stylesheet" href="style.css"/>
	<title>Untitled 6</title>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
 <script type="text/javascript">
$(document).ready(function(){
    $("#nxt").click(function(){
        
          $("#1st").hide();
          $("#details").show();
    });
    
});

</script>
</head>
<body>
<center><br /><br /><br /><br />
<div style="height: 400px; width: 700px; border: 1px solid silver;border-radius: 10px;" id="1st">
<h1 style="color:#5AC1E2">WELCOME TO MYBOOK <span style="color: red;"><?php session_start();echo $_SESSION['user'];?></span></h1>
<span class="label label-default" style="font-size: 27px;">Setup Your Profile</span>
<br /><br />
<span class="label label-primary" style="font-size: 20px;">Choose Your DP!</span><br /><br />
<div style="height: 120px; width: 120px;outline-width: 3px;border: 1px solid #428BCA;" >
<img src="images\man-icon.png" height="120px" width="120px"/>
</div><br /> 
<form name="upload pic" enctype="multipart/form-data" method="post">
<input type="file" id="pimg" name="image" required="" class="form-control" style="width: 250px;"/>
<input type="submit" value="upload" class="btn btn-primary" id="uplod"/>
</form>
<button id="nxt" class="btn btn-success"  style="margin-left: 550px;width: 100px;margin-top: -10px;">Next-> </button>
</div>
<?php
$mail=$_SESSION['email'];
if(isset($_FILES['image']))
         {
        $filename=$_FILES['image']['name'];
        $filetype=$_FILES['image']['type'];
        $fileloc=$_FILES['image']['tmp_name'];
        $filesize=$_FILES['image']['size'];
        //echo $fileextn;
          if(($filetype=="image/gif" || $filetype=="image/png" || $filetype=="image/jpg" || $filetype=="image/jpeg") && $filesize < 3000000)
            {
            //echo $filetype.'<br/>';
            //echo $filesize.'<br/>';
            //echo $fileloc.'<br/>';
            $filepath="C:/xampp/htdocs/mybook1/profilepics/".$filename;
            
            move_uploaded_file($fileloc,$filepath);
            require("db.php");
            $query2=mysql_query("UPDATE user SET profilepic='$filepath' WHERE email='$mail'" );
            $query3=mysql_query("SELECT profilepic FROM user WHERE email='$mail'");
            $row1=mysql_fetch_array($query3);
              //$picdata=$row['0'];
              $pic=explode('/',$row1[0]);
              $piclocation=end($pic);
              //echo $piclocation;
              $_SESSION['profilepic']=$piclocation;
              //echo $_SESSION['profilepic'];
          }
         else
          echo"Upload a image file less than 1mb";
       }
   if(empty($piclocation)==false){
     echo '<img src="profilepics/'.$_SESSION['profilepic'].'" alt="" height="120px" width="120px" class="dp"/>';
    }
?>
<div id="details">
<center>
<div style="width:500px ;">
<form method="post" action="bio.php">
<h3 style="color: #428BCA;">BIO</h3>
<table class="table" width="60px">
<tr><td>Profile Name</td><td><input type="text" required="" name="prof" class="form-control" style="width: 150px;"/></td></tr>
<tr><td>DOB</td><td><select name="date"  required="" class="form-control" style="width:100px; ">
                      <option value="">date</option>
                      <option value="1" >1</option>
                        <option value="2" >2</option>
                          <option value="3" >3</option>
                            <option value="4" >4</option>
                              <option value="5" >5</option>
                                <option value="6" >6</option>
                                  <option value="7" >7</option>
                                    <option value="8" >8</option>
                                      <option value="9" >9</option>
                                        <option value="10" >10</option>
                                          <option value="11" >11</option>
                                            <option value="12" >12</option>
                                            <option value="13" >13</option>
                                              <option value="14" >14</option>
                                                <option value="15" >15</option>
                                                  <option value="16" >16</option>
                                                    <option value="17" >17</option>
                                                      <option value="18" >18</option>
                                                        <option value="19" >19</option>
                                                          <option value="20" >20</option>
                                                            <option value="21" >21</option>
                                                              <option value="22" >22</option>
                                                                <option value="23" >23</option>
                                                                  <option value="24" >24</option>
                                                                    <option value="25" >25</option>
                                                                    <option value="26" >26</option>
                                                                      <option value="27" >27</option>
                                                                        <option value="28" >28</option>
                                                                          <option value="29" >29</option>
                                                                            <option value="30" >30</option>
                                                                              <option value="31" >31</option>
                                                                               
                                                            
                      </select>
                      <select name="month" required="" class="form-control" style="width: 100px;margin-top:-35px;margin-left:120px;;">
                      <option value="">month</option>
                      <option value="jan" >jan</option>
                        <option value="feb" >feb</option>
                          <option value="mar" >mar</option>
                            <option value="apr" >apr</option>
                              <option value="may" >may</option>
                                <option value="june" >june</option>
                                  <option value="july" >july</option>
                                    <option value="aug" >aug</option>
                                      <option value="sept" >sept</option>
                                        <option value="oct" >oct</option>
                                          <option value="nov" >nov</option>
                                            <option value="dec" >dec</option>
                                            </select>
                                             <select name="year" required="" class="form-control" style="width:100px;margin-top:-35px;margin-left:240px;">
                      <option value="">year</option>
                      <option value="1990" >1990</option>
                        <option value="1991" >1991</option>
                          <option value="1992" >1992</option>
                            <option value="1993" >1993</option>
                              <option value="1994" >1994</option>
                                <option value="1995" >1995</option>
                                  <option value="1996" >1996</option>
                                    <option value="1997" >1997</option>
                                      <option value="1998" >1998</option>
                                        <option value="1999" >1999</option>
                                          <option value="2000" >2000</option>

                                                             
                                            </select>
                    
                      </td></tr>
<tr><td>Country</td><td><input type="text" required="" name="country" class="form-control" style="width: 150px;"/></td></tr>
<tr><td>City</td><td><input type="text" required="" name="city" class="form-control" style="width: 150px;"/></td></tr>
<tr><td>Relationship Status</td><td>
  <select name="relationship" required="" class="form-control" style="width:250px;">
                     <option value="">relation</option>
                      <option value="Married" >Married</option>
                        <option value="Single" >Single</option>
                          <option value="In a relationship" >In a relationship</option>
                            <option value="Complicated" >Complicated</option>
                            </select>
</td></tr>
<tr><td>work</td><td>
 <select name="work" required="" class="form-control" style="width:250px;">
                     <option value="">work</option>
                      <option value="Studying" >Studying</option>
                        <option value="In a job" >In a job</option>
                        
                            </select>

</td></tr>
</table>
<input type="submit" value="submit" class="btn btn-primary"/>
</form>
</div>
</center>
</div>
</center>
</body>
</html>
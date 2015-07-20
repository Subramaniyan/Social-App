<?php
session_start();
$frmid=$_SESSION['id'];
require("db.php");
$toid = $_GET['id'];
mysql_query("INSERT INTO requests VALUES(" . $frmid . ", " .  $toid .")");
?>
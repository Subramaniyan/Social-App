<?php
session_start();
$toid=$_SESSION['id'];
require("db.php");
$frmid = $_GET['id'];
$act = $_GET['act'];
if($act=="acc") {
	mysql_query("INSERT INTO friends VALUES(" . $toid . ", " .  $frmid .")");
	mysql_query("INSERT INTO friends VALUES(" . $frmid . ", " .  $toid .")");
}
mysql_query("DELETE FROM requests WHERE fromid = " . $frmid . " and toid = " . $toid . ";");
?>
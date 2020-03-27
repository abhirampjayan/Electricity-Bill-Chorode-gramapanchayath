<?php
include("check.php");
$db = mysqli_connect("localhost","root","","cp");
$user=$_SESSION['username'];
$sql = "SELECT * FROM eusr WHERE uname = '$user'";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
?>
<?php
include 'conn.php';
$delete_record = $_GET['del'];
$query = "delete from teachers where u_id='$delete_record'";
if(mysqli_query($con, $query)){
	echo "<script>window.open('home.php?teachers','_self')</script>";}
?>
<?php
session_start();
if(!$_SESSION['admin_name']){
	header('location:index.php?error=You are not an admin!');
}
?>






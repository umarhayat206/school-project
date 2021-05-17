<?php
	include 'conn.php';
	include 'header.php';
	
	
?>

<html>
<head>

<title></title>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet"  type="text/css">
<script src="bootstrap1/js/jquery-3.2.0.js"></script>
<script src="bootstrap1/js/bootstrap.js"></script>

</head>

<body style="overflow-x:hidden">
<?php
include 'nav.php';
//include 'body.php';
?>
<div class="row">
  <div class="col-md-3 col-sm-3 col-xs-3">
   <?php include'home-sidebar.php'?>
   
   
   
  </div>
  
  
  
  <div class="col-md-9 col-sm-9 col-xs-9">
      <?php 
	 if(isset($_GET['dashboard']))
      {
	    include 'dashboard.php';
      }
	  if(isset($_GET['student']))
      {
	    include 'students.php';
      }
      if(isset($_GET['student_register']))
      {
	    include 'user_registration.php';
      }
	  if(isset($_GET['teachers']))
      {
	    include 'teachers.php';
      }
	  
	  if(isset($_GET['teacher_register']))
      {
	    include 'user_registration_teacher.php';
      }
	  
	  ?>
  
  </div>
  
  
  
  
</div>


</body>

<?php include 'footer.php';?>

</html>
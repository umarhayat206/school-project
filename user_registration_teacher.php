<?php

?>

<html>
	<head>
		<title>user registration</title>
        
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
      <link href="bootstrap1/css/bootstrap.css" rel="stylesheet"  type="text/css">
     <script src="bootstrap1/js/jquery-3.2.0.js"></script>
     <script src="bootstrap1/js/bootstrap.js"></script>
        
</head>


<body>



<div class="container-fluid">		
  
    <div class="dashboard-div">
    <h3>Regiter Teacher</h3>
    </div><br><br>


<div class="panel panel-default">
  <div class="panel-heading"><h1 class="text-center" >Register Teacher here</h1></div>
  <div class="panel-body">
  
 





     <form  class="form-horizontal" method="POST" action="user_registration_teacher.php">
        <div class="form-group">
        <label class="control-label col-sm-2">Teacher's Name:</label>
        <div class="col-sm-10">
        <input type='text' name='user_name' class="form-control"placeholder="Teacher name">
        <font color="red"><?php echo @$_GET['name']; ?></font>
        </div>
        </div><br>


        <div class="form-group">
        <label class="control-label col-sm-2">Father Name:</label>
        <div class="col-sm-10">
        <input type='text' name='father_name' class="form-control" placeholder="Father name">
        <font color="red"><?php echo @$_GET['father']; ?></font>
       </div>
       </div><br>

       <div class="form-group">
       <label class="control-label col-sm-2">Ex School Name:</label>
       <div class="col-sm-10">
       <input type='text' name='school_name' class="form-control" placeholder="Ex school name">
       <font color="red"><?php echo @$_GET['school']; ?></font>
       </div>
      </div><br>

      <div class="form-group">
      <label class="control-label col-sm-2">Employee No:</label>
      <div class="col-sm-10">
      <input type='text' name='roll_no' class="form-control" placeholder="Employee No">
      <font color="red"><?php echo @$_GET['roll']; ?></font>
      </div>
      </div><br>


      <div class="form-group">
      <label class="control-label col-sm-2">Class:</label>
      <div class="col-sm-10">
       <select name='student_class'class="form-control">
					<option value='null'>Select Class</option>
					<option value='1st'>1st</option>
					<option value='2nd'>2nd</option>
					<option value='3rd'>3rd</option>
					<option value='4th'>4th</option>
					<option value='5th'>5th</option>
					<option value='6th'>6th</option>
					<option value='7th'>7th</option>
					<option value='8th'>8th</option>
					<option value='9th'>9th</option>
					<option value='10th'>10th</option>
					</select>

	  <font color="red"><?php echo @$_GET['class']; ?></font>		
      </div>
      </div><br>
  
      <center><input type="submit" value="submit" name="submit" class="btn btn-primary index_btn"></center>
      </form>
      
        
   </div>
</div>
</div><br><br>


</body>
</html>
<?php 

		$con =  mysqli_connect("localhost","root","");
		mysqli_select_db($con , 'school_management_system');
	if(isset($_POST['submit'])){

		$student_name		=	$_POST['user_name'];
		$student_father		=	$_POST['father_name'];
		$student_school		=	$_POST['school_name'];
		$student_roll		=	$_POST['roll_no'];
		$student_class		=	$_POST['student_class'];
		
		if($student_name==''){
	echo "<script>window.open('user_registration_teacher.php?name=Name is required','_self')</script>";
		exit;
		}
		if($student_father==''){
	echo "<script>window.open('user_registration_teacher.php?father=Father Name is required','_self')</script>";
		exit;
		}
		if($student_school==''){
	echo "<script>window.open('user_registration_teacher.php?school=School Name is required','_self')</script>";
		exit;
		}
		if($student_roll==''){
	echo "<script>window.open('user_registration_teacher.php?roll=Enter roll number','_self')</script>";
		exit;
		}
		if($student_class=='null'){
	echo "<script>window.open('user_registration_teacher.php?class=Select class','_self')</script>";
		exit;
		}
		
$query = "INSERT INTO `teachers`VALUES 
('','$student_name','$student_father','$student_school','$student_roll','$student_class')";
if(mysqli_query($con, $query)){
	echo "<script>window.open('home.php?teachers','_self')</script>";
	 }
	}



?>
<?php
//include 'header.php';
include 'nav.php';
	include 'conn.php';
	$edit_record = $_GET['edit'];
	$query = "select * from students where u_id='$edit_record'";
	$run = mysqli_query($con, $query);
	while($row = mysqli_fetch_array($run)){
		$edit_id 	= $row['u_id'];
		$s_name 	= $row[1];
		$s_father 	= $row[2];
		$s_school 	= $row[3];
		$s_roll 	= $row[4];
		$s_class	= $row[5];
	}
?>
<html>
<head>
		<title>Updating Student's Record</title>
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet"  type="text/css">
<script src="bootstrap1/js/jquery-3.2.0.js"></script>
<script src="bootstrap1/js/bootstrap.js"></script>

</head>
<body>


<div class="container">		

<div class="panel panel-default">
  <div class="panel-heading"><h1 class="text-center" >Update Student Here</h1></div>
  <div class="panel-body">
  
  
        <form  class="form-horizontal" method="POST" action='edit.php?edit_form=<?php echo $edit_id; ?>'>
  <div class="form-group">
    <label class="control-label col-sm-2">Student's Name:</label>
    <div class="col-sm-10">
    	<input type='text' name='user_name1' value='<?php echo $s_name; ?>' class="form-control">
    </div>
  </div><br>


  <div class="form-group">
    <label class="control-label col-sm-2">Father Name:</label>
    <div class="col-sm-10">
    <input type='text' name='father_name1' value='<?php echo $s_father; ?>' class="form-control">	
    </div>
  </div><br>

   <div class="form-group">
    <label class="control-label col-sm-2">Ex School Name:</label>
    <div class="col-sm-10">
    <input type='text' name='school_name1' value='<?php echo $s_school; ?>' class="form-control">
    </div>
  </div><br>

  <div class="form-group">
    <label class="control-label col-sm-2">Roll No:</label>
    <div class="col-sm-10">
    <input type='text' name='roll_no1' value='<?php echo $s_roll; ?>' class="form-control">	
    </div>
  </div><br>


  <div class="form-group">
    <label class="control-label col-sm-2">Class</label>
    <div class="col-sm-10">
                    <select  name='student_class1'class="form-control">
					<option value='<?php echo $s_class; ?>'><?php echo $s_class; ?></option>
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
             
     <center><input type="submit" value="update" name="update" class="btn btn-primary index_btn" ></center>
</form>
  
  
  
  </div>
</div>








</div><br><br>






























			
	</body>
</html>

<?php
if(isset($_POST['update'])){
	$edit_record1 	= $_GET['edit_form'];
	$student_name 	= $_POST['user_name1'];
	$student_father = $_POST['father_name1'];
	$student_school = $_POST['school_name1'];
	$student_roll 	= $_POST['roll_no1'];
	$student_class 	= $_POST['student_class1'];
	
$query1 = "update students set u_name='$student_name',u_father='$student_father',u_school='$student_school',
u_roll='$student_roll',u_class='$student_class' where u_id='$edit_record1'";	

if(mysqli_query($con, $query1)){
	echo "<script>window.open('home.php?student=Record has been updated!','_self')</script>";
}
}
include 'footer.php';
?>
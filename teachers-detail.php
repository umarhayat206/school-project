<?php

include 'conn.php';
include 'nav.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
<link href="bootstrap1/css/bootstrap.css" rel="stylesheet"  type="text/css">
<script src="bootstrap1/js/jquery-3.2.0.js"></script>
<script src="bootstrap1/js/bootstrap.js"></script>

</head>

<body>
<div class="container"

<?php
$record_details = @$_GET['details'];
$query			= "select * from teachers where u_id='$record_details'";
$run1			= mysqli_query($con, $query);
while($row1 = mysqli_fetch_array($run1)){
$name	= $row1[1];
$father	= $row1[2];
$school = $row1[3];
$roll 	= $row1[4];
$class 	= $row1[5];
?>

				<br><br>
                
                
                <h2 class="text-center">Your Details Here</h2><br /><br />
					<table  class="table  table-bordered " >
					<thead>
					<tr align='center'>
						<th>Name</th>
						<th>Father</th>
						<th>School</th>
						<th>Employee No.</th>
						<th>Class</th>
					</tr>
                    </thead>
                    <tbody>
					<tr align='center'>
						<td><?php echo $name; 	?></td>
						<td><?php echo $father; ?></td>
						<td><?php echo $school; ?></td>
						<td><?php echo $roll; 	?></td>
						<td><?php echo $class;  ?></td>
					</tr>
                    </tbody>
					<?php } ?>
				</table><br />
              <center><a href="home.php?teachers" class="btn btn-primary index_btn">Back to teachers</a></center>
</div>
</body>
</html>
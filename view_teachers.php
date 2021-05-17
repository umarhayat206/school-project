<?php
//session_start();
//if(!$_SESSION['admin_name']){
	//header('location:student.php?error=You are not an admin!');
//}
//include  'header.php';
//include 'nav.php';

?>
<html>
	<head>
		<title>view_teachers.php</title>
        
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        <link href="bootstrap1/css/bootstrap.css" rel="stylesheet"  type="text/css">
        <script src="bootstrap1/js/jquery-3.2.0.js"></script>
        <script src="bootstrap1/js/bootstrap.js"></script>
    </head>
<body>

<div class="container-fluid">	

		
      <div class="dashboard-div">
      <h3>All teachers</h3>
      </div><br><br>			
 
      <h1 class="text-center">All Teachers Record</h1><br><br>
 
			<center><font color="red" size="6">
			<?php echo @$_GET['deleted'];?>
			<?php echo @$_GET['updated'];?>
			<?php echo @$_GET['logged'];?>
			</font></center>
            
            
		<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>Serial No.</th>
			<th>Teacher's Name</th>
			<th>Father's Name</th>
			<th>Employee No.</th>
			<th>Delete</th>
			<th>Edit</th>
			<th>Details</th>
          </tr>
       </thead> 
       <tbody>		
		
<?php

include 'conn.php';
$que = "select * from teachers";
$run = mysqli_query($con, $que);

$i = 1;

while($row = mysqli_fetch_array($run)){
	
	$u_id = $row['u_id'];
	$u_name = $row[1];
	$u_father = $row[2];
	$u_roll = $row[4];
?>
		<tr align="center">
			<td><?php echo $i; $i++; ?></td>
			<td><?php echo $u_name; ?></td>
			<td><?php echo $u_father; ?></td>
			<td><?php echo $u_roll; ?></td>
			<td><a href='delete_teacher.php?del=<?php echo $u_id; ?>'><span class="glyphicon glyphicon-trash"></span>Delete</a></td>
			<td><a href='edit_teacher.php?edit=<?php echo $u_id; ?>'><span  class="glyphicon glyphicon-pencil"></span>Edit</a></td>
			<td><a href='teachers-detail.php?details=<?php echo $u_id; ?>'><span  class="glyphicon glyphicon-zoom-in"></span>Details</a></td>
		</tr>
<?php } ?>
         </tbody>
		</table>
				
			<form action="view_teachers.php" method="get">
				Search a record:<input type="text" name="search">
								<input type="submit" name="submit" value="Find!">
			</form>
	<?php
		if(isset($_GET['search'])){
			$search_record	= $_GET['search'];
			$query2	= "select * from teachers where u_name='$search_record' OR u_roll='$search_record'";
			$run2 = mysqli_query($con, $query2);
			while($row2=mysqli_fetch_assoc($run2)){
				$name123 	= $row2['u_name'];
				$father123 	= $row2['u_father'];
				$school123 	= $row2['u_school'];
				$roll123 	= $row2['u_roll'];
				$class123 	= $row2['u_class'];
	?>
		<table width='800px' bgcolor='yellow' align='center' border='1px solid black'>
			<tr align='center'>
			<td><?php echo $name123; ?></td>
			<td><?php echo $father123; ?></td>
			<td><?php echo $school123; ?></td>
			<td><?php echo $roll123; ?></td>
			<td><?php echo $class123; ?></td>
			</tr>
		</table>
		<?php }}?>
        
</div>        
</body>
</html>
<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
        
        <link href="stylesheet.css" rel="stylesheet" type="text/css">
        <link href="bootstrap1/css/bootstrap.css" rel="stylesheet"  type="text/css">
        
	</head>
    <style>

	
	</style>
    
<body class="index_body">
    
<div class="row">
<div class="index_panel">   
  <div class="col-md-offset-4 col-md-4">



   <div class="panel panel-default">

            <div class="panel-heading"><h1  class="text-center">Admin Log in</h1></div><br>

     <div class="panel-body">



     <form action="index.php" method="post" class="form-horizontal">
                  
      <div class="form-group">
      <div class="col-md-12">
      <input type="text" name="admin_name" class="form-control" placeholder="Admin name">
      </div>
      </div> <br>
      
      
        
      <div class="form-group">
      <div class="col-md-12">
       <input type="password" name="admin_pass" class="form-control" placeholder="Admin Password">
      </div>
      </div> <br> 
      
      <div class="form-group">
          <center><input type='submit' name='login' value='Login' class="btn btn-primary index_btn1"></center>
      </div>
               
		        
	  </form>

    </div>
        <div class="panel-footer"></div>        
   </div>
  </div>
  
</div> 

</div>


	
	<center><?php echo @$_GET['error']; ?></center>
</body>
</html>
 <?php
	include 'conn.php';
 if(isset($_POST['login'])){
	$admin_name = $_SESSION['admin_name'] = $_POST['admin_name']; 
	$admin_pass = $_POST['admin_pass'];
		
		$query = "select * from login where user_name='$admin_name' AND user_password='$admin_pass'";
		$run = mysqli_query($con, $query);
		if(mysqli_num_rows($run)>0){
		echo "<script>window.open('home.php?dashboard','_self')</script>";
									}
			else {
				echo "<script>alert('Password or username is incorrect!')</script>";
				 }
 }
?>















<!--
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
			<div class="container"><!-- flex container -->
<!--
<div class="welcome">Welcome</div>
    		<div class="box"><!-- flex item -->
   <!--   			  <p>Login<input type="text" name=""></p>
        	      <p>Password<input type="password" name=""></p>
          	      <p><input type="button" value="submit" name=""></p>

   			</div>
			</div>
</body>
</html>
<?php
include 'footer.php';
?>
-->
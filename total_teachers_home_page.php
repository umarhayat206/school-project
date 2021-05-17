<?php
// total students for home page
include 'conn.php';
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
// Perform query


                 if ($result = mysqli_query($con, "SELECT * FROM teachers")) {
  echo "The Total No. of Teachers Registered Up Till Now are: " . mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}
mysqli_close($con);

 
?>





              

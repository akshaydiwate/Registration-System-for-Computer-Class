<?php
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqli_connect_error();
}
//execute the SQL query and return records

$reciptno=$_POST['uid'];
$sql1="select * from submit where reciptno=$reciptno";
$result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result) == 1) 
    {
    $sql="DELETE FROM submit WHERE reciptno=$reciptno";
      if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
                                    }
      else{
           echo "Record Deleted Successfully";
		   header("location:display.php");
          }
    }
	else{
	echo "Record not present";
	}
mysqli_close($con);
?>
<html>
<body>
</form>
</body>
</html>
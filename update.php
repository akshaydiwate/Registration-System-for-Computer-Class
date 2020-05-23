<html>
<body>
<?php
$uid=$_POST['uid'];
session_start();
$_SESSION['uid']=$_POST['uid'];
$con=mysqli_connect("localhost","root","","register");
if (mysqli_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqli_connect_error();
}
$sql1="select * from submit where reciptno=$uid";
$result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result) == 0) // User not found. So, redirect to login_form again.
    {
	echo "Record not present";
	
	}
?>
<h1>Student Updation</h1>
<form name="f1" action="save.php" method="post">
<table >
<table cellspacing="2" cellpadding="2" border="1">

 <tr>
   <td align="right">Name</td>
   <td><input type="text" name="Name" /></td>
 </tr>

 <tr>
   <td align="right">Address</td>
   <td><textarea name="t1"></textarea></td>
 </tr>
 
<tr>
   <td align="right">Date of Birth</td>
   <td><input type="date" name="dob" /></td>
 </tr>
 
<tr>
   <td align="right">Contact No.</td>
   <td><input type="text" name="con" /></td>
 </tr>
 
<tr>
   <td align="right">Blood Group</td>
   <td><input type="text" name="blood" /></td>
 </tr>
 
<tr>
   <td align="right">Course</td>
   <td><input type="text" name="cou" /></td>
 </tr>
 

<tr>
   <td align="right">Category</td>
   <td><input type="text" name="cat" /></td>
 </tr>
 
<tr>
   <td align="right">Fees Paid</td>
   <td><input type="text" name="fees" /></td>
 </tr>
 
<tr>
   <td align="right">Recipt No.</td>
   <td><input type="text" name="rec" /></td>
 </tr>
 
 <td align="right"></td>
   <td><input type="submit" name = "insert" value="Submit" /></td>
 </tr>
 </table>
 </form>
</table>
<input type="submit" name="but1" value="Save"/>
</form>

</body>
</html>
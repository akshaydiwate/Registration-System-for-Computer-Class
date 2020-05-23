<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>COMPUTER LANGUAGE COURSES</title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<script language="javascript">
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
     //var t = setTimeout(function(){startTime()},500);
var t=setTimeout(startTime(),500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};
    return i;
}
</script>
</head>
<body onload="startTime()">
<div id="txt"></div>
<body>
<div class="page-in">
<div class="page">
<div class="main">
<div class="header">
<div class="header-bottom">
<h2><b>.....HOSTEL MANAGEMENT SYSTEM......</b><br>
</h2>
</div>
<div class="topmenu">
<ul>
  <li style="background: transparent none repeat scroll 0% 50%; -moz-background-clip: initial; -moz-background-origin: initial; -moz-background-inline-policy: initial; padding-left: 0px;"><a href="index.php"><span>Home</span></a></li>
    <li><a href="about1.html"><span>About us</span></a></li>
  <li><a href="facility.html"><span>Facilities</span></a></li>
  <li><a href="rule.html"><span>Rules</span></a></li>
  <li><a href="management1.html"><span>Management</span></a></li>
  <li><a href="about1.html"><span>Contact</span></a></li>

</ul>
</div>
</div>
<div class="content">
<div class="content-left">
<div class="row1">


<?php
session_start();
$uid=$_SESSION['uid'];
$con=mysqli_connect("localhost","root","","register");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to mysqli: " . mysqli_connect_error();
}
$name = $_POST["Name"];
$address =  $_POST["t1"];
$dob = $_POST["dob"];
$conno = $_POST["con"];

$blood = $_POST["blood"];
$course = $_POST['cou'];
$category = $_POST["cat"];
$fees= $_POST['fees'];
$reciptno = $_POST["rec"];


$sql1="select * from submit where reciptno=$uid";
$result = mysqli_query($con,$sql1);
    if(mysqli_num_rows($result) == 1) // User not found. So, redirect to login_form again.
    {
    $sql="UPDATE submit SET name='$name',address='$address',dob='$dob',conno='$conno',blood='$blood',course='$course',fees='$fees',reciptno='$reciptno' WHERE reciptno=$uid";
      if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
                                    }
      else{
           echo "Record Updated Successfully";
		   require('display.php');
          }
    }
	else{
	echo "Record not present";
	}

mysqli_close($con);
?>


</h2></p><hr>
</div>
</div>
<div class="content-right">
<div class="mainmenu">
<h2 class="sidebar1">Main Menu</h2>
<ul>
  <li><a href="stud_add2.php">New Student Admission</a></li>
  <li><a href="update.html"> Update Student </a></li>
  <li><a href="display.php">Display student </a></li>
  <li><a href="delete.html">Delete Student </a></li>
</ul>
</div>
<div class="contact">
<h2 class="sidebar2">Contact</h2>
<div class="contact-detail">
<p class="green"><strong>SHREE computer learning</strong></p>
<p><strong>Address :</strong> Yeola,Dist: Nasik -423401<br>
</p>
<p><strong>E-mail :</strong>shree.computers@gmail.com</p>
<p><strong>Phone :</strong>(02559)225011/12/12/14<br></p>
</div>
</div>
</div>
</div>
<div class="footer">
<p> Developed By : (PALLAV BARI & SAMEER ADHIKARI & AKSHAY DIWATE)
</p>
<ul>
  <li style="border-left: medium none;"><a href="index.php"><span>Home</span></a></li>
  <li><a href="about1.html"><span>About&nbsp;us</span></a></li>
  <li><a href="facility.html"><span>Facilities</span></a></li>
  <li><a href="rule.html"><span>Rules</span></a></li>
  <li><a href="management1.html"><span>Management</span></a></li>
  <li><a href="contact.html"><span>Contact</span></a></li>

</ul>
</div>
<img src="images/footnote.gif" class="copyright" alt="http://www.htmltemplates.net">
</div>
</div>
</div>
</body></html>
<html>
<head><title>DB connect</title></head>
<body>
<?php
$con=mysqli_connect("localhost","root","","BCA");
if(mysqli_connect_errno())
{
echo "Faild conncect to connect :".mysqli_connect_error();
}
else
{
echo "Connected Successfully";
}
if($_POST)
{
$txtName=$_POST['name'];
$txtFather=$_POST['fname'];
$txtMother=$_POST['mname'];
$txtRollno=$_POST['rollno'];
$txtGender=$_POST['gender'];
$txtCity=$_POST['city'];
$txtAddress=$_POST['tname'];
$txtDob=$_POST['dob'];

if (isset($_REQUEST["check1"]))
$txtCollege=$_REQUEST["check1"];
if(isset($_POST["check2"]))
$txtCollege=$_POST["check2"];
if(isset($_POST["check3"]))
$txtCollege=$_POST["check3"];
if(isset($_POST["check4"]))
$txtCollege=$_POST["check4"];


//For mutiple select checkbox 
/*
if(isset($_REQUEST["check1"]))
	$s1=$_REQUEST["check1"];
	if(isset($_REQUEST["check2"]))
	$s2=$_REQUEST["check2"];
	if(isset($_REQUEST["check3"]))
	$s3=$_REQUEST["check3"];
	if(isset($_REQUEST["check44"]))
	$s4=$_REQUEST["check4"];

and change in insert ('$s1 $s2 $s3 $s4 $s5') at place of '$txtCollege'
	
*/

$txtStream=$_POST['stream'];
$txtPhone=$_POST['kk'];
$txtMarks1=$_POST['10marks'];
$txtMarks2=$_POST['12marks'];
$txtemail=$_POST['email'];
}
//inseting in records

mysqli_query($con,"insert into form(Name,Father_name,Mother_name,Rollno,Gender,City,
Address,dob,College,Stream,Phone_no,Marks1,Marks2,Email) 
values ('$txtName','$txtFather','$txtMother','$txtRollno','$txtGender','$txtCity','$txtAddress','$txtDob','$txtCollege'
,'$txtStream','$txtPhone','$txtMarks1','$txtMarks2','$txtemail')");

mysqli_close($con);

echo "<br>Data inserted in database ";
?>
</body>
</html>



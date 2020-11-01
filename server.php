<?php 

$conn=mysqli_connect("localhost","root","","tourdb");
$name=$_POST['Name'];
$mobileno=$_POST['mobileNo'];
$address=$_POST['Address'];
$email=$_POST['emailId'];
$dob=$_POST['dob'];
$tour=$_POST['optradio'];
$travel=$_POST['check'];
$chk="";
foreach($travel as $ch)
{
	$chk .= $ch.",";
}
$amount=$_POST['Budget'];



$sql=mysqli_query($conn,"INSERT INTO users (name,mobileno,address,dob,tourtype,traveltype,amount,email)values('$name','$mobileno','$address','$dob','$tour','$chk','$amount','$email')");
if($sql)
{
	echo "<div class='alert alert-success'><strong>Sucess: </strong>New user has been registerd!</div>";
}else
{
	echo mysqli_error($conn);
}




?>
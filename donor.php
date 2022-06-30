<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


$D_name=$_POST['D_name'];
$F_name=$_POST['F_name'];
$DOB=$_POST['DOB'];
$Adress=$_POST['Adress'];
$City=$_POST['City'];
$pin_code=$_POST['pin_code'];
$state=$_POST['state'];
$contact_no=$_POST['contact_no'];
$E_mail=$_POST['E_mail'];
$gender=$_POST['gender'];
$Blood_group=$_POST['Blood_group'];

$conn=mysqli_connect('localhost','root','','bloodbank');
$query="insert into donor_registration values('$D_name','$F_name','$DOB','$Adress','$City','$pin_code','$state','$contact_no','$E_mail','$gender',             '$Blood_group')";

$data=mysqli_query($conn,$query);
if($data)
{
	echo"<h1>Thanks for your interest to donate blood</h1></br>
	<h2>This will  beneficial for someone</h2>";
}
else
{
	echo "sorry your registration is unsuccessful......";
}

?>
</body>
</html>

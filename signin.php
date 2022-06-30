
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
$first_name = $_POST['fn'];
$father_name = $_POST['fname'];
$password= $_POST['pw'];
$E_mail = $_POST['email'];
$mobile= $_POST['mn'];
$address = $_POST['address'];
$gender = $_POST['g'];
$city = $_POST['city'];
$state = $_POST['state'];
$dob= $_POST['dob'];
$country= $_POST['country'];

$conn = mysqli_connect('localhost','root','','bloodbank');

  
 $query="insert into signin values ( '$first_name', '$father_name' , '$password' , '$E_mail' , '$mobile' , '$address' , '$gender', '$city', '$state' , '$dob' , '$country')";
 $data=mysqli_query($conn,$query);

 if($data)
 {
  echo "<h1>Thank you for registering with us";
 }
 else
 {
 	echo "not possible";
 }


?>
</body>
</html>
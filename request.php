
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
$name = $_POST['name'];
$F_name = $_POST['F_name'];
$DOB = $_POST['DOB'];
$contact_no = $_POST['contact_no'];
$E_mail = $_POST['E_mail'];
$gender= $_POST['gender'];
$blood_group = $_POST['blood_group'];

$conn = mysqli_connect('localhost','root','','bloodbank');

  
 $query="insert into send_request values ( '$name', '$F_name' , '$DOB' , '$contact_no' , '$E_mail' , '$gender' , '$blood_group')";
 $data=mysqli_query($conn,$query);

 if($data)
 {
  echo "<h1>We will contact you shorly";
 }
 else
 {
 	echo "not possible";
 }


?>
</body>
</html>



<?php

$conn=new mysqli("localhost","root","","student");
if($conn->connect_error)
{
	die("Connection failed.".$conn->connect_error);
}
else
{
echo "Connected successfully";
$p=implode(',',$_POST['c']);
$check="SELECT * FROM techt WHERE email = '$_POST[email]'";
$res=mysqli_query($conn,$check);
$count=mysqli_num_rows($res);
if ($count>=1)
{
    header('Location: exist.html');
}
else
{
$sql="INSERT INTO techt(firstname,clgname,noofevents,phone,email,workshop,Accomodations,events) VALUES ('" . $_POST["firstname"] . "', 
'" . $_POST["clgname"] . "', '" . $_POST["events"] . "',
'" . $_POST["phone"] . "','".$_POST["email"]."',
'".$_POST["workshop"]."','".$_POST["workshop1"]."','$p')";
if($conn->query($sql)===TRUE)
{     

	header('Location: success.html');
exit;
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}	
}
}

?>

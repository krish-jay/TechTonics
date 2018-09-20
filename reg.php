
<?php

$conn=new mysqli("localhost","root","","student");
if($conn->connect_error)
{
	die("Connection failed.".$conn->connect_error);
}
else
{
echo "Connected successfully";
$sql="INSERT INTO amara(name,clgname,email,phn)VALUES ('" . $_POST["firstname"] . "', '" . $_POST["clgname"] . "', '" . $_POST["events"] . "','" . $_POST["phone"] . "')";
if($conn->query($sql)===TRUE)
{
	echo " New record created successfully ";
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	
}
}

?>

<?php
$conn=mysqli_connect("localhost","root","","student");
if($conn->connect_error)
{
	die("Connection failed.".$conn->connect_error);
}
else
{
echo "Connected successfully";
$check="SELECT * FROM admin WHERE user = '$_POST[user]' AND password= '$_POST[password]'";
$res=mysqli_query($conn,$check);
if($res==1)
{
	$result=mysqli_query($conn,"SELECT*FROM techt;"); 
 	echo"<table border='1'>
	<tr>
<th>Name</th>
<th>College Name</th>
<th>No of Events</th>
<th>Phone No</th>
<th>Email</th>
<th>Workshop</th>
<th>Accomodation</th>
<th>Events</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row['firstname']."</td>";
echo"<td>".$row['clgname']."</td>";	
echo"<td>".$row['noofevents']."</td>";
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['workshop']."</td>";
echo"<td>".$row['Accomodations']."</td>";
echo"<td>".$row['events']."</td>";	
}
echo "</table>";
}}

mysqli_close($conn);
?>
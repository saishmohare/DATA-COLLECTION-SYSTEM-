<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="db_modified";
$connection = new mysqli($servername, $username, $password,$db);
if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
}
if(!empty($_GET['q']))
{
	$q=$_GET['q'];
	$query=mysql_query("select first_name,last_name from student_profile where first_name LIKE '%$q%' OR lastname LIKE '%$q%'") or die("could not found");
	$result=mysqli_query($conn,$query);
	while($output=mysqli_fetch_assoc($result))
	{
		$fname=$row['first_name'];
		$lname=$row['last_name'];
		$output.='<a>'.$fname.' '.$lname.'</a>';
		
	}
}
echo'$output';
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="mydb";
$connection = new mysqli($servername, $username, $password,$db);
if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
}
$output='';
if(isset($_POST['searchVal']))
	{
		$searchq=$_POST['searchVal'];
		$searchq=preq_replace("#[^0-9a-z]#i","",$searchq);
		$query=mysql_query("select * from student where firstname LIKE '%$searchq%' OR lastname LIKE '%$searchq%'" ) or die("could not found");
		$count=mysql_num_rows($query);
		if($count=0)
		{
			$output='there was no search result';
		}
		else
		{
			while($row=mysql_fetch_array($query))
			{
				$fname=$row['firstname'];
				$lname=$row['lastname'];
				$output.='<div>'.$fname.' '.$lname.'</div>';
			}
		}
	}
	echo'($output)';
?>
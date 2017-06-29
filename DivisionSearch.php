<!DOCTYPE html>
<html>
<head>
</head>
<body>
<header>
	<h1 align="center">The Student List</h1>
</header>
<div class ="content" align="center">
<?php 
$db = new mysqli("localhost", "root", "", "test");
//if(isset($_POST["firstname"]))
////    echo $_POST["classno1"];
//else
//    echo "no";
$classno=$_POST["classno1"];
 ?>
<table border="1" align="center">
<tr>
<td>First Name</td>
<td>Last Name</td>
<td>Division</td>
</tr>
<tr>
<?php 
    $sql = "SELECT * FROM student_profile where classno='$classno' ";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)) {
        ?>
		<tr>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
        
			<td><?php echo $row['classno']; ?></td>

		</tr>
        <?php
		
    }
 ?>
</tr>
</table>
    <br><br>
    <button onClick="window.location='searchbeta.php';">Go to Home page</button>
</div>	
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styling.css">
</head>
<body>
<header>
	<h1>The Guest List</h1>
</header>
<div class ="content">
<?php 
$db = new mysqli("localhost", "root", "", "test");
 ?>

<table border="1" align="center">
<tr>
<td>firstname</td>
<td>lastname</td>
</tr>
<tr>
<?php 
    $sql = "SELECT * FROM student_profile WHERE id IN(SELECT s_id FROM student_participate WHERE e_id IN(SELECT id FROM events WHERE event_name='$eventname'))";
    $result = $db->query($sql);
    while($row = mysqli_fetch_assoc($result)) {
        ?>
		<tr>
        <td><?php echo $row['first_name']; ?></td>
        <td><?php echo $row['last_name']; ?></td>
		</tr>
        <?php
		
    }
 ?>
</tr>
</table>
</div>	
</body>
</html>

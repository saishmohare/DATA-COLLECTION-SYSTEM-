<html>
<head>
<style>
/*
h1{
	background-image: url(key.jpg);
	background-position:  left top;
	background-position: repeat;
	color: black;
	font-size:5em;
	text-align: center;
	text-shadow: 4px 4px black;
}
*/
#amigo{

	color:blue;
}
h4{
	color: white;
}
#sub{
	text-align: center;

	border: 10px solid transparent;
	border-image: url(key.jpg) 10 round;
	font-size:2em;
	margin: auto;
	color: white;
	background color:#cc4400;
}
</style>
</head>
<header><h1 align="center">Event Participation</h1></header>
<body>
<div align="center">
<!--
    <form action="#" method="post">
	<br>Enter event name to be searched: <input type="text" name="val">
	<input name="submit" type="submit" />
    </form>
    </div>
    <center>
	<style type="text/css">
		table{
			border-collapse:collapse;
			text-align:center;
		}
		th,td{
			border-width:0px 1px 1px 0px;
		}
	</style>
-->
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db = "test";

		$conn = new mysqli($servername, $username, $password, $db);
		if(isset($_POST['submit']))
		{
			$eventname=$_POST['val'];
			$sql="SELECT * FROM student_profile WHERE id IN(SELECT s_id FROM student_participate WHERE e_id IN(SELECT id FROM events WHERE event_name = '".$eventname."'))";
			$result = $conn->query($sql);
			echo'<table border="1"><th >first_name</th><th>last_name</th><th>id</th>';
			while($row=$result->fetch_assoc())
			{
				echo'<tr><td>'.$row['first_name'].'</td><td>'.$row['last_name'].'</td><td>'.$row['id'].'</td></tr>';
			}
			echo'</table>';
		}
	?>
    
    <br><br>
    <button onClick="window.location='searchbeta.php';">Go to Home page</button>
    </div>
</body>
</html>

<!-- select first_name,last_name FROM student_profile where id  In (select id from events where event_name='".$eventname."') -->
<!-- SELECT first_name, last_name, id FROM student_profile, events WHERE id IN (SELECT id FROM events WHERE event_name = $eventname) -->
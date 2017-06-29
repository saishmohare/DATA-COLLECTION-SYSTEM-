<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Home Page</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" type="text/css" href="profile1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="effects.js"></script>		
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<a href="#"><img src="logo.jpeg"></a>
			</div>
			<ul>
				<li><a href="#here">Features</a></li>
				<li><a href="#">How To</a></li>
				<!--<span class="glyphicon glyphicon-search"></span>-->
				<!--<li class="SignUp"><a href="A:\Programming Files\Project X\Register\signup1.html" color="white">Sign Up</a></li>-->
				<li class="Logout"><a href="logout.php" color="white"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			</ul>
		</div>
		<div class="content">
			<button id="resume">DOWNLOAD RESUME</button>
			<div id="design">
				<div id="one">
				</div>
				<div id="two">
				</div>
				<div id="three">
				</div>
				<div id="four">
				</div>
				<div id="five">
				</div>
				<div id="six">
				</div>
			</div>
			<div class="container">
				<div class="modify">
					<div class="inner">
				            <p style="font-size: 30px ;margin-top: 50px;"><strong>
                             <?php
                                session_start();
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "SELECT first_name,last_name FROM student_profile where email='$name'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo strtoupper($row['first_name'])."  ".strtoupper($row['last_name']);

                                    }
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                                ?>   


                           </strong></p>
<!--
						<p id="p1" style="margin-top: 15px;">
                            <?php  
                            //session_start();
                            echo $_SESSION['username']
                            ?>
                        </p>
-->
						<p id="p1" style="margin-top: 15px;">
                            <?php
                              
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "SELECT email,ph_no,address FROM student_profile where email='$name'";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row['email']."<br>".($row['ph_no'])."<br>".$row['address'];

                                    }
                                } else {
                                    echo "0 results";
                                }

                                $conn->close();
                            ?>   

                        </p>
						
						<hr/>
						<div class="activities">
							<div class="subheading">
								<p>COCURRICULAR</p>
							</div>
							<div class="main">
								<p><strong>
                                <?php
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "select event_name from events where id in (select e_id from student_participate where type=1 and s_id in (select id from student_profile where email='$name')) limit 1"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              }
                                    


                                $conn->close();
                                ?>     
                                    
                                </strong></p>
								<p>
                                <?php
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "select event_name from events where id in (select e_id from student_participate where type=1 and s_id in (select id from student_profile where email='$name')) limit 1"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              }
                                    
                            $sql = "select event_name from events where id in (select e_id from student_participate where type=1 and s_id in (select id from student_profile where email='$name')) "; 
          
                                $result = $conn->query($sql);

                                
                            if ($result->num_rows > 1)
                            {
                                echo"<p>";
                                 echo"<strong>";
                                  $sql = "select event_name from events where id in (select e_id from student_participate where type=1 and s_id in (select id from student_profile where email='$name')) limit 1,2"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              } 
                               
                                
                                echo"</strong>";
                                
                                
                                echo"</p>";
                                echo"<p>";
                                    $sql = "select event_name from events where id in (select e_id from student_participate where type=1 and s_id in (select id from student_profile where email='$name')) limit 1,2"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                echo"</p>";
                            }
                                $conn->close();
                                ?> 
                                
							</div>
							<div class="links" style="margin-left:60%;"  >
								<link ><a  style="cursor:pointer;list-style-type:none;"  onclick="cocurrics()">+view more</a></link>
<!--								<a href="#" style="margin-right: 30px; text-decoration: none;">+add actitivity</a>-->
							</div>
							<div id ="detailcoinfo" class="detailcoinfo">
								<a href="javascript:void(0)" class="closeCobtn" onclick="closeCo()">&times;</a>

								<p>
                                <?php
                            
                                    
                                    
                                    
                                    
                                     $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "select event_name from events where id in (select e_id from student_participate where type=1 and s_id in (select id from student_profile where email='$name'))"; 
          
                                $result = $conn->query($sql);
                                 echo "Co-Curricular Activities";
                                if ($result->num_rows > 0) 
                                {
                                    
                                    echo"<hr>";
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
//                                        echo "<br><br>".$row["event_name"];
                                         echo "<table border=1px solid>";
                                            echo"<tr>";
                                                echo"&nbsp*&nbsp&nbsp".$row["event_name"]."<hr>";
                                            echo"</tr>";
                                            

                                        echo"</table>";

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              }
                                    
                                    
    
                                    
                                    
                                    ?>
                                    
                                </p>
							</div>
						</div>
						<hr>
						
                        <div class="activities">	
							<br>
							<div class="subheading">
								<p>EXTRACURRICULAR</p>
							</div>
							<div class="main">
								<p><strong>
                                <?php
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "select event_name from events where id in (select e_id from student_participate where type=2 and s_id in (select id from student_profile where email='$name')) limit 1"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              }
                                    


                                $conn->close();
                                ?>     
                                    
                                </strong></p>
								<p>
                                <?php
                                
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "select event_name from events where id in (select e_id from student_participate where type=2 and s_id in (select id from student_profile where email='$name')) limit 1"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              }
                                    
                            $sql = "select event_name from events where id in (select e_id from student_participate where type=2 and s_id in (select id from student_profile where email='$name')) "; 
          
                                $result = $conn->query($sql);

                                
                            if ($result->num_rows > 1)
                            {
                                echo"<p>";
                                 echo"<strong>";
                                  $sql = "select event_name from events where id in (select e_id from student_participate where type=2 and s_id in (select id from student_profile where email='$name')) limit 1,2"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              } 
                               
                                
                                echo"</strong>";
                                
                                
                                echo"</p>";
                                echo"<p>";
                                    $sql = "select event_name from events where id in (select e_id from student_participate where type=2 and s_id in (select id from student_profile where email='$name')) limit 1,2"; 
          
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) 
                                {
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {
                                        
                                        echo $row["event_name"];

                                    }
                                }
                                echo"</p>";
                            }
                                $conn->close();
                                ?> 
                                
							</div>
							<div class="links" style="margin-left:60%;"  >
								<link ><a  style="cursor:pointer;list-style-type:none;"  onclick="extracurrics()">+view more</a></link>
<!--								<a href="#" style="margin-right: 30px; text-decoration: none;">+add actitivity</a>-->
							</div>
							<br>
						</div>
						<div id ="detailextrainfo" class="detailextrainfo">
							<a href="javascript:void(0)" class="closeExtrabtn" onclick="closeExtra()">&times;</a>

							<p>
                                <?php
                            
                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "test";
                                $name=$_SESSION['username'];

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                } 

                                $sql = "select event_name from events where id in (select e_id from student_participate where type=2 and s_id in (select id from student_profile where email='$name'))"; 
          
                                $result = $conn->query($sql);
                                    
                               
                                
                                echo "Extra-Curricular Activities";

                                
                                if ($result->num_rows > 0) 
                                {
                                    
                                    echo"<hr>";
                                    while($row = $result->fetch_assoc()) 
                                    {
                                         
//                                        echo "<br><br>".$row["event_name"];
                                         echo "<table border=1px solid>";
                                            echo"<tr>";
                                                echo "*&nbsp&nbsp&nbsp".$row["event_name"]."<hr>";
                                            echo"</tr>";
                                            

                                        echo"</table>";

                                    }
                                }
                                
                             else
                             {
                                  echo "0 results";
                              }
                              ?>
                                    
                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="chart">
		
                <!--Varun's code here-->    
            </div>
		</div>
		<div class="footer">
			<div class="links" style="margin-left:40%;"  >
							<a href="#" style="margin-right: 30px; text-decoration: none;">About us</a>
							<a href="#" style="margin-right: 30px; text-decoration: none;">Contact us</a>
							<a href="#" style="margin-right: 30px; text-decoration: none;">Top</a>
			</div>
		</div>
	<script>	
		function extracurrics(){
		document.getElementById("detailextrainfo").style.width = "100%";
		window.scrollTo(0,0);
	}
	function closeExtra() {
		document.getElementById("detailextrainfo").style.width = "0%";
	}
	function cocurrics(){
		document.getElementById("detailcoinfo").style.width = "100%";
		window.scrollTo(0,0);
	}
	function closeCo() {
		document.getElementById("detailcoinfo").style.width = "0%";
	}
	</script>
	</body>

</html>
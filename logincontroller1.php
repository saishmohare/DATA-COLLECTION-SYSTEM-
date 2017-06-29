<?php
    $username=$_POST['username'];
    $password=$_POST['password'];

    mysql_connect("localhost","root","");
    mysql_select_db("test");
    
    $result=mysql_query("select * from student_profile where email='$username' and password='$password'") or
            die("failed to query database");

    /*if($result)
    {
         header("location:home.php");
    }
    else
       echo"incorrect username or password"; */
    
    $row=mysql_fetch_array($result);

    if($row['email']==$username && $row['password']==$password)
    {
        session_start();
        $_SESSION['username']=$username;
        header("location:home1.php");
    }
    else
        echo"incorrect username or password";
    
        
                
?>
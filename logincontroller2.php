<?php
    $username=$_POST['username'];
    $password=$_POST['password'];

    mysql_connect("localhost","root","");
    mysql_select_db("test");
    
    $result=mysql_query("select * from teachers_profile where email='$username' and password='$password'") or
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
//        $_SESSION['username']=$username;
//        $_SESSION['fisrt_name']=$firstname;
//        $_SESSION['last_name']=$lastname;
//        $_SESSION['ph_name']=$phno;
//        $_SESSION['address']=$address;
        header("location:searchbeta.php");
    }
    else
        echo"incorrect username or password";
    
        
                
?>
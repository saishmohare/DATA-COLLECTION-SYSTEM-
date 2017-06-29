<?php
    $name=$_POST['firstname'];
   

    mysql_connect("localhost","root","");
    mysql_select_db("test");
    
//    echo $name;

   
        $element = explode(' ', $name);
        $out = $element[0] ;
//        echo $out;

         $result=mysql_query("select * from student_profile where first_name='$out'")
        or
            die("failed to query database");

//if($result)
// {
//      header("location:home1.php");
// }
// else
//       echo"incorrect username or password"; 
//    
   $row=mysql_fetch_array($result);
    $sname=$row['email'];
//  if($row['first_name']==$out)
//  {
     session_start();
        $_SESSION['username']=$sname;
     
       header("location:home1.php");
//  }
//   else
//       echo"Student not found";
//    $result=mysql_query("select * from teachers_profile where email='$username' and password='$password'") or
//            die("failed to query database");
//
//    /*if($result)
//    {
//         header("location:home.php");
//    }
//    else
//       echo"incorrect username or password"; */
//    
//    $row=mysql_fetch_array($result);
//
//    if($row['email']==$username && $row['password']==$password)
//    {
//        session_start();
////        $_SESSION['username']=$username;
////        $_SESSION['fisrt_name']=$firstname;
////        $_SESSION['last_name']=$lastname;
////        $_SESSION['ph_name']=$phno;
////        $_SESSION['address']=$address;
//        header("location:searchbeta.php");
//    }
//    else
//        echo"incorrect username or password";
//    
        
                
?>
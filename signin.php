<?php
session_start();
include("db_conn.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
   
   $user= $_POST['Form-email1'];
  $pass= $_POST['Form-pass1'];
try  
{ 
       $sql="SELECT v_name,v_pass FROM visitors WHERE v_name = '$user' AND v_pass = '$pass' ";
       $query = mysqli_query($conn,$sql);
       if($query){
       while($row=mysqli_fetch_array($query)){
        $name=$row['v_name'];
             $_SESSION['visitor'] = $name;
             $_SESSION['visitorPASS'] = $pass;
             header('location:blog.php');
             exit();
          }
        }else{
            echo "<script>
            alert('Incorrect username and/or password!');
        
            </script>";
            exit();
          }
         }
catch(Exception $error)  
{  
     $message = $error->getMessage(); 
     echo $message; 
} 
}


?>
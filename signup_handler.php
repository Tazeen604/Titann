<?php
session_start();
include("db_conn.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
   
   $visitorname= $_POST['vuser'];
   $visitormail= $_POST['vemail'];
   $visitorpass= $_POST['vpw'];
try  
{ 
    $sql="INSERT INTO visitors VALUES (Null,?, ?, ?)";
    if($stmt = mysqli_prepare($conn,$sql))
    {
        mysqli_stmt_bind_param($stmt, 'sss', $visitorname, $visitormail, $visitorpass);
        mysqli_stmt_execute($stmt);
       header("location: blog.php");
      
    }
else{
    $error = $conn->errno . ' ' . $conn->error;
   echo $error; 
   echo "<script>
   alert('Incorrect username and/or password!');
   window.location.href='index.html';
   </script>";
}
}catch(Exception $e)
{
    $message = $e->getMessage(); 
    echo $message; 
}
}
?>
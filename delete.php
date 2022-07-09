<?php
include("db_conn.php");
$id= $_GET['id'];
if($stmt=$conn->prepare("DELETE from user_profile where client_id=?"))
{
$stmt->bind_param('i',$id);
$stmt->execute();
if($stmt1=$conn->prepare("DELETE from files where client_id_files=?"))
    {
$stmt1->bind_param('i',$id);
$stmt1->execute();
header("location: dashboard.php");
}
    }
    else{
        echo "Not Deleted";
    }
       ?> 
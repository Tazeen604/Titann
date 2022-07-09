<?php
include("db_conn.php");
$id= $_GET['id'];
$filecon= $_GET['file'];
if($stmt=$conn->prepare("DELETE from files where client_id_files=? AND filename=?"))
    {
$stmt->bind_param('is',$id,$filecon);
$stmt->execute();
header("location: dashboard.php");
    }
    else{
        echo "Not Deleted";
    }
       ?> 
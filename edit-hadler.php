<?php
include("db_conn.php");
$id= $_POST['clientid'];
$cname= $_POST['clientname'];
$cmail= $_POST['mail'];
$cpass= $_POST['clientpass'];
$cCompaney= $_POST['companey'];
$cadd= $_POST['address'];
$cph= $_POST['txtph'];
$cprim= $_POST['txtprim'];
$csprt= $_POST['txtsprt'];
$cdate= $_POST['txtdate'];
if($stmt=$conn->prepare("UPDATE user_profile SET client_name=?,client_email=?,cpassword =?,companey_name=?,address=?,
	ph_no=?,primary_contact=?,support_level=?,renewal_date=? where client_id = ?"))
    {
$stmt->bind_param('sssssiissi',$cname,$cmail,$cpass,$cCompaney,$cadd,$cph,$cprim,$csprt,$cdate,$id);
$stmt->execute();
header("location: dashboard.php");
    }
    else{
        echo "Not updated";
    }
       ?> 
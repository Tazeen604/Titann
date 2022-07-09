<?php
$id=$_GET['id'];
include("db_conn.php");
$sql="SELECT * FROM user_profile where client_id = '$id'";
$res=mysqli_query($conn,$sql);
if($res)
{                               
    while($row=mysqli_fetch_array($res)){
        $code=$row['client_id'];
        $clname=$row['client_name'];
        $clmail=$row['client_email'];
        $clpass=$row['cpassword'];
        $clcomp=$row['companey_name'];
        $cladd=$row['address'];
        $clph=$row['ph_no'];
        $clprcont=$row['primary_contact'];
        $clsprt=$row['support_level'];
        $clrenewdate=$row['renewal_date'];
    }
}
else{
    echo "There is some problem";
}
       ?> 
 <?php
session_start();
include("header.php");
?>
<div class="container mt-5">

                 <div class="row">
               
                        <div class="col-lg-3 col-md-3">
                            
                        </div>
                                
                          
                                <div class="col-lg-6 col-md-6">
                                <h4 class="title text-center mt-3">Edit Profile</h4>
                         
                          
                                <form method="post" action="edit-hadler.php" class="mb-3">
                                  
                                    <div class="form-group mt-3">
                                                <label>Client ID</label>
                                                <input type="text"  class="form-control" value=<?php echo $id; ?> name="clientid" readonly>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label>Username</label>
                                                <input type="text" class="form-control" value=<?php echo $clname; ?> name="clientname">
                                            </div>
                                     
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" value=<?php echo $clmail; ?> name="mail">
                                            </div>
                                       
                                    
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="text" class="form-control" value=<?php echo $clpass; ?> name="clientpass">
                                            </div>
                                      
                                   
                                            <div class="form-group mt-3">
                                                <label>Company </label>
                                                <input type="text" class="form-control" value=<?php echo $clcomp; ?> name="companey">
                                            </div>
                                      
                                       
                                   
                                            <div class="form-group mt-3">
                                                <label>Address</label>
                                                <input type="text" class="form-control" value=<?php echo $cladd; ?> name="address">
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Phone No</label>
                                                <input type="text" class="form-control" value=<?php echo $clph; ?> name="txtph">
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Primary Contact</label>
                                                <input type="text" class="form-control" value=<?php echo $clprcont; ?> name="txtprim">
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Support Level</label>
                                                <input type="text" class="form-control" value=<?php echo $clsprt; ?> name="txtsprt">
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Renewal Date</label>
                                                <input type="date" class="form-control" value=<?php echo $clrenewdate; ?> name="txtdate">
                                            </div>
                                      
                                 
                                    <button type="submit" class="btn btn-fill btn-primary mt-3">Update</button>
                                </form>
</div>
<div class="col-lg-3 col-md-3">
                            
                            </div>
                            </div>
            </div>


                <?php include("footer.php");?>
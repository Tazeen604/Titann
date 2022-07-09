<?php
session_start(); 
include("header.php");
if(isset($_SESSION['admin']))
{ 
 ?>
<div class="container-fluid border mb-5  mt-5" style="background-color:#fff ;">
                               
                                <h3 class="title mb-3 text-center" font-weight="bold">All Clients </h3>
                                <table class="table table-striped table-sm mb-3">
                                <thead>
                                <tr>
                                <th>Client Code</th>
                                <th> Name</th>
                                <th> Email</th>
                                <th> Password</th>
                                <th> Companey</th>
                                <th> Address</th>
                                <th> Phone</th>
                                <th> Primary Contact</th>
                                <th>Support Level</th>
                                <th>Renewal Date</th>
                                <th>Send</th>
                                <th>click to operate</th>
                                
                                </tr>
                                </thead>
                                <tbody>
                                
                           <?php
                           include("db_conn.php");
                           try{
                           $sql="SELECT * FROM user_profile";
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
                                  ?> 
                            <tr>
                            <td > <?php echo $code; ?></td>   
                            <td style ="word-break:break-word;"> <?php echo $clname; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $clmail; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $clpass; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $clcomp; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $cladd; ?></td>  
                            <td style ="word-break:break-word;"><?php echo $clph; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $clprcont; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $clsprt; ?></td>  
                            <td style ="word-break:break-word;"> <?php echo $clrenewdate; ?></td>
                            <td> <a  href="sendmail.php?mail=<?php echo $clmail;?>&pws="<?php echo $clpass;?>>Send Email</a></td>
                            <td> <a  href="adminoperations.php?clientid=<?php echo $code;?>">Operations</a></td>
                          </tr> 


                              <?php }?>
                              </tbody>  </table>
                               <?php
                           }
                           else{
                            $error = $conn->errno . ' ' . $conn->error;
                            echo $error; // 1054 Unknown column 'foo' in 'field list'
                           }
                        }
                         catch(Exception $error)  
                         {  
                              $message = $error->getMessage(); 
                              echo $message; 
                         } 
                           
                           ?>
                            
                                
                    </div>

    <?php 
   }else{
        echo "<script>
    alert('Plz Login First');
    window.location.href='admin.php';
    </script>";
      } ?>
  
    <!--   Core JS Files   -->
  <?php include("footer.php");?>
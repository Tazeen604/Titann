  <?php
  $id= $_GET['id'];
  include("header.php");

  ?>
  <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 p-5">

                                <h3 class="title">Upload Files</h3>
                          
                           
                                <form method="post" action="upload.php" enctype="multipart/form-data">
                                   
                                    <div class="form-group">
                                     
                                       <div class="custom-file mt-4">
                                    
                                          <input type="file" class="custom-file-input" name="customFile">
                                          
                                           </div>
                                        </div>
                                            <div class="form-group mt-4">
                                                <label>Client ID to which contract upload(disabled)</label>
                                                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>
                                            </div>
                                      
                                    <div class=" mt-4 mb-4">  <button type="submit" name="save" class="btn btn-fill btn-primary">Upload</button></div> 
                                        </form>
                           
                                        </div> 
                                        <div class="col-lg-3 col-md-3 col-sm-3">
</div>
                                
                            </div>
            
                        </div>
                      
                        <?php include("footer.php");?>
<?php include("header.php");
?><div class="container mt-5">
                 <h4 class="title mb-4 mt-4 text-center">Add Client</h4>
                 <div class="row">
               
                        <div class="col-lg-3 col-md-3">
                            
                        </div>
                                
                          
                                <div class="col-lg-6 col-md-6">
                                <form method="post" action="clientProfile.php" class="mb-3">
                                   
                                            <div class="form-group">
                                            <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" name="clientname" required>
                                            </div>
                                       
                                        
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" placeholder="mike@email.com" name="mail" required>
                                            </div>
                                       
                                       
                                            <div class="form-group mt-3">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="Password" class="form-control" placeholder="....." name="clientpass" required>
                                            </div>
                                       
                                       
                                            <div class="form-group mt-3">
                                                <label>Company </label>
                                                <input type="text" class="form-control"placeholder="Company" name="companey" required>
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" name="address" required>
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Phone No</label>
                                                <input type="text" class="form-control" placeholder="Phone no" name="txtph" required>
                                            </div>

                                            <div class="form-group mt-3">
                                                <label>Primary Contact</label>
                                                <input type="text" class="form-control" placeholder="Primary Contact" name="txtprim" required>
                                            </div>
                              
                                            <div class="form-group mt-3">
                                                <label>Support Level</label>
                                                <input type="text" class="form-control" placeholder="Your support level" name="txtsprt" required>
                                            </div>
                                      
                                            <div class="form-group mt-3">
                                                <label>Renewal Date</label>
                                                <input type="date" class="form-control" placeholder="Date" name="txtdate" required>
                                            </div>
                                   
                                  
                                 <div class="mt-4" > <button type="submit" class="btn btn-fill btn-primary">Save</button></div> 
                                </form>
                                </div>
 
 <div class="col-lg-3 col-md-3">
                            
                            </div>

                            </div>
                    </div>
              
    

    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include("footer.php");?>
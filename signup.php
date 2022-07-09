<?php include("hrader.php");?>
    <!-- End Header -->
    <!-- End Hero -->

    </main>
    <section id="user">
                 
                 <div class="row no-gutters">
                        <div class="col-lg-4 col-md-4">
                            
                        </div>
                        <div class="col-lg-4 col-md-4">
                        <div class="card shadow mb-5 p-5">
                     <h2 class="text-center text-uppercase">Sign Up</h2>
<hr>
                        <form action="signup_handler.php" method="post" role="form">
                            <div class="row">
                                    <div class="form-group  mt-3 ">
                                    <label for="name">User Name</label>
                                    <input type="text" class="form-control" name="vuser" id="vuser" placeholder="Username"required>
                                </div>
                            </div>
                            <div class="row">
                            
                                <div class="form-group  mt-3 ">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="vemail" id="vemail" placeholder="Email"required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="name">Password</label>
                                <input type="password" class="form-control" name="vpw" id="vpw"placeholder="......" required>
                            </div>
                            <div class="mt-4 text-center"><button type="submit" name="log" class="btn btn-block  rounded-pill btn-primary">Sign Up</button></div>
                        </form>
                        </div>
</div>
                        <div class="col-lg-4 col-md-4">
                            
                            </div>
                        
                    </div>
            </div>
    </section>

    <!-- End #main -->

    <!-- ======= Footer ======= -->
  <?php include("footer.php");?>
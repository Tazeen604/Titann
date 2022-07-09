<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$visitor=$_SESSION['visitor'];
$admin=$_SESSION['admin'];
$client=$_SESSION['client'];
include 'blog_post.php';
include("modalfile.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adapted IT Solutions</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/viewpoststyle.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/0deccbe0ac.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
            <i class="fa fa-user"></i><a href="client.php">Client Login</a>
                 
                
                
            </div>
            <div class="social-links d-none d-md-block">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

        <div class="logo-img me-auto"><a href="index.html"><img src="assets/img/logo.png" alt="Adapted Solutions"></a></div>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
              
                <ul>
                <?php if($visitor!="" || $client!="") 
                                {?> 
  <li><a class="nav-link scrollto active" href="#featured-services">Solution</a></li>
    <li><a class="nav-link scrollto" href="#it-support">IT Support</a></li>
    <li><a class="nav-link scrollto" href="#clients">Clients</a></li>
    <li><a class="nav-link scrollto " href="#footer">Contact</a></li>
    <li><a class="nav-link scrollto" href="cyber-essentials.php">Cyber Essentials</a></li>
    <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
    <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
    <?php }else if($admin!=""){?>
                <li><a class="nav-link scrollto active" href="dashboard.php">Dashboard</a></li>
                   
                   <li><a class="nav-link scrollto" href="createpost.php">Add New Post</a></li>
                   <li><a class="nav-link scrollto" href="allposts.php">All Posts</a></li>
                   <li><a class="nav-link scrollto" href="posts.php">Post Operations</a></li>
                   <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
                     <?php } else{?>
                      <li><a class="nav-link scrollto active" href="#featured-services">Solution</a></li>
    <li><a class="nav-link scrollto" href="#it-support">IT Support</a></li>
    <li><a class="nav-link scrollto" href="#clients">Clients</a></li>
    <li><a class="nav-link scrollto " href="#footer">Contact</a></li>
    <li><a class="nav-link scrollto" href="cyber-essentials.php">Cyber Essentials</a></li>
    <li><a class="nav-link scrollto" href="blog.php">Blog</a></li> <?php } ?>
                  </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->
    <!-- End Hero -->

   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" rel="stylesheet">

<?php
$postid = $_GET['postid'];
$_SESSION['postid']=$postid;
$article = new Post();
$resultarticle  = $article->getarticle($postid);
include("db_conn.php");
$sql="SELECT profile_pic FROM admin";
$res=mysqli_query($conn,$sql);
if($res)
{                               
    while($row1=mysqli_fetch_array($res)){
     $adminimg= $row1['profile_pic'];
    }
  }
if($visitor =="" && (!isset($_SESSION['FB_ID']) && $_SESSION['FB_ID']==''))
{
?>
<div class="d-flex flex-row-reverse p-3">
<a href="#elegantModalForm" class="btn btn-light btn-rounded" data-toggle="modal" data-target="#elegantModalForm"> Log in / Sign up</a>
</div><?php } else{?>
 
 <div class="container mt-3"style="background-color: #fff;">
	<a href="fblogout.php">Logout</a> <?php } ?>
<?php
include("db_conn.php");
while ($row = $resultarticle->fetch_assoc()) {?>
  
  <div class="row">
  <div class="col-lg-1 col-md-1 col-sm-1"></div>
  <?php
  $aviews=$row['article_views'];
  $aviews++;
  if($stmt=$conn->prepare("UPDATE post SET article_views=? where  article_id= ?"))
    {
$stmt->bind_param('ss',$aviews,$postid);
$stmt->execute();
    }
    ?>
   <div class="col-lg-10 col-md-10 col-sm-10">
  <div class="card bg-light text-dark center border m-4 p-2">
  <div class="card-body">
  <div class="d-flex flex-row align-items-center text-left p-2 bg-white border-bottom px-4">
                <div class="profile-image"><img class="rounded-circle img-fluid img-responsive" src="postimages/<?php echo $adminimg; ?>"width="60"></div>
                
                <div class="d-flex flex-column ml-3">
                   
                    <div class="d-flex flex-row align-items-center align-content-center post-title"><span class="bdge m-3"><?php echo $row['article_name'];?></span></div>
                    <div class="text-danger"> Posted On <?php echo $row['date'];?></div>
                </div>
  </div>
   
    <p class="card-text"> <?php echo $row['article_content'];?></p>
    
  </div>
   <div style="width:60% height:60%"> <img style="margin:0 auto; width:100%" class="img-fluid img-responsive"src="postimages/<?php echo $row['img'];?> "></div>
    
    <div class="card-footer text-muted">
  <div> <?php echo $aviews?> Views</div> 
  </div>
  </div>
<div class="col-lg-1 col-md-1 col-sm-1"></div></div>
</div>
 
  <?php
  
}
 if($visitor!="" || $_SESSION['FBID']) 
  {
    $resagain = mysqli_query($conn, "SELECT * FROM comments WHERE post_id='$postid'");
   $countcomments =mysqli_num_rows($resagain);
      $error = $conn->errno . ' ' . $conn->error;?>
  
<div class="row">
<div class="col-lg-1 col-md-1 col-sm-1"></div>

<div class="col-lg-10 col-md-10 col-sm-10 bg-white comments-section">
			<!-- comment form -->
			<form class="clearfix" action="comments_handler.php" method="post" id="comment_form">
				<h4>Post a comment:</h4>
				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
				<button  class="btn btn-primary btn-sm pull-right" name="comment_posted" id="submit_comment">Submit comment</button>
			</form>

			<!-- Display total number of comments on this post  -->
			<h6><span id="comments_count"><?php echo $countcomments;?></span> Comment(s)</h6>
			<hr>
			<!-- comments wrapper -->
      <div id="comments-wrapper">
      <div class="comment clearfix">
      <?php if($countcomments<1)
    { 
     echo" There are no comments to show";

  }else{  
     while($comments=mysqli_fetch_array($resagain)){?>
  
    <img src="postimages/10.jpg" alt="" class="profile_pic">
						<div class="comment-details">
							<span class="comment-name"><?php  echo $comments['visitor_name'];?></span>
							<span class="comment-date"><?php  echo $comments['created_at'];?></span>

             <p></p> <span class="comment-date">   <p> <?php  echo $comments['body'];?><br><br></p></span></div>

<?php
 }

  }
					?>
			</div><!-- comments wrapper -->
		</div>
    </div><!-- // all comments -->
    <div class="col-lg-1 col-md-1 col-sm-1"></div>
	</div>
  <?php }
   ?>

</div>
<!-- Javascripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>      
  
<?php
include 'footer.php';
?>
 <!--  Login Modal Form-->   

 
 
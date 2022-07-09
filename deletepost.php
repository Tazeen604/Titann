<?php 
//It autoloads the class
include 'blog_post.php';

$ids = $_GET['postid'];

$del = new Post();

$result = $del->deletearticle($ids);

if($result === true)
{
	header("location: posts.php");
}
else
{
	echo $result;
}

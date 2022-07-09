<?php
session_start(); 
include("header.php");
include 'blog_post.php';
if(isset($_SESSION['admin']))
{ 


//$postid = $_GET['postid'];

$article = new Post();
$result  = $article->allarticles();

?>
<div class='row'>
      <div class="col-lg-7 mx-auto">
        <div class="card border-0 shadow">
          <div class="card-body p-5">

            <!-- Responsive table -->
            <div class="table-responsive">
              <table class="table m-0">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Article Name</th>
                    <th scope="col">View Complete Article</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                <?php
while ($row = $result->fetch_assoc()) {
    $code=$row['article_id'];
    ?>
                    <td>
                    <?php echo $row['article_id'];?></td>
                   <td> <?php echo $row['article_name'];?></td>
                   <td><i class="fa fa-table"></i><a href="viewpost.php?postid=<?php echo $code; ?>"> View Complete Article</a></td>
                   <td><i class="fa fa-edit"></i> <a href="edit_article.php?postid=<?php echo $code; ?>">Edit</a></td>
                   <td><i class="fa fa-trash"></i> <a href="deletepost.php?postid=<?php echo $code; ?>"onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                     
                   
                  </tr>
                  <?php
}
?>
</tbody> </table>
</div>
</div>
</div>
<?php 
   }else{
        echo "<script>
    alert('Plz Login First');
    window.location.href='admin.php';
    </script>";
      } ?>
<?php include("footer.php"); ?>


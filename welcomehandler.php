<?php
 include("db_conn.php");
  if (isset($_POST['save_profile'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    // For image upload
    $target_dir = "postimages/";
    $target_file = $target_dir . basename($profileImageName);
    // VALIDATION
    // validate image size. Size is calculated in Bytes
    if($_FILES['profileImage']['size'] > 200000) {
      $msg = "Image size should not be greated than 200Kb";
      $msg_class = "alert-danger";
    }
    // check if file exists
    if(file_exists($target_file)) {
      $msg = "File already exists";
      $msg_class = "alert-danger";
    }
    // Upload image only if no errors
    if (empty($error)) {
      if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
        if($stmt=$conn->prepare("UPDATE admin SET profile_pic = ?"))
        {
    $stmt->bind_param('s',$profileImageName);
    $stmt->execute();
    echo "<script>
    alert('image uploaded and saved in the database');
    window.location.href='dashboard.php';
    </script>";
        } else {
          echo "There was an error in the database";
         
        }
      } else {
        echo "There was an error uploading the file";
      
      }
    }
}
?>
<?php
include("db_conn.php");
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['customFile']['name'];
   $myid= $_POST['id'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['customFile']['tmp_name'];
    $size = $_FILES['customFile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx','jpg','jpeg'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['customFile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql="INSERT INTO files VALUES (Null,?, ?,?)";
            if($stmt = mysqli_prepare($conn,$sql))
            {
                mysqli_stmt_bind_param($stmt, 'sii', $filename, $size,$myid);
                mysqli_stmt_execute($stmt);
               header("location: dashboard.php");
            }
            else{
                echo "File could not be uploaded";
            }
    }
}
}
?>
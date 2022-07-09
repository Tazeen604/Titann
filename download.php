<?php 
session_start();
include("db_conn.php");
if(isset($_SESSION['client']))
{ 
$code=$_GET['id'];
$sql = "SELECT * FROM files WHERE client_id_files=?";
$stmt = $conn->prepare($sql); 
$stmt->bind_param("i", $code);
$stmt->execute();
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    $filename=$row['filename'];
    
}
                          $filepath = 'uploads/' . $filename;
                     
                          if (file_exists($filepath)) {
                              header('Content-Description: File Transfer');
                              header('Content-Type: application/octet-stream');
                              header('Content-Disposition: attachment; filename=' . basename($filepath));
                              header('Expires: 0');
                              header('Cache-Control: must-revalidate');
                              header('Pragma: public');
                              header('Content-Length: ' . filesize('uploads/' . $file['filename']));
                              readfile('uploads/' . $file['filename']);
                              exit;
                          }
                          else{
                              echo "No file exist";
                          }
                        }else{
                            echo "<script>
                        alert('Plz Login First');
                        window.location.href='index.html';
                        </script>";
                          } ?>
                    ?>  
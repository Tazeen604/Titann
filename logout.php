<?php
session_start();  

unset($_SESSION['admin']);
unset($_SESSION['client']);
unset($_SESSION['visitor']); 
session_destroy(); 
header("Location: index.html");  
?>  
?>
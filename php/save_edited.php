<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $new_text = $_POST['about'] ?? '';
    
    file_put_contents('../Data/About.txt', $new_text);

  header("Location:../HTML/index.php"); 
    exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $new_text = $_POST['about'] ?? '';
    
    file_put_contents('About.txt', $new_text);

  header("Location: index.php"); 
    exit();
}
?>
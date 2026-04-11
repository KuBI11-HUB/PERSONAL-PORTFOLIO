<?php
$file = "../Data/About.txt";
if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo "Welcome to my portfolio.";
}
?>  
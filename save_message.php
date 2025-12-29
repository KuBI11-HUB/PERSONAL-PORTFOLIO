<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    $entry =
        "Name: $full_name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Subject: $subject\n" .
        "Message: $message\n" .
        "------------------------\n";

    $file = fopen("contacts.txt", "a");

    if ($file === false) {  
        die("Error: Could not open contacts.txt for writing.");
    }

    fwrite($file, $entry);  
    fclose($file);

    echo "<script>alert('Message Sent Successfully!'); window.location.href='index.php';</script>";
    exit();
}

header("Location: index.php");
exit();
?>
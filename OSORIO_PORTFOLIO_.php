<?php

$filename = 'messages.txt'; // Name of your text file

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    if (!empty($lines)) {
        foreach ($lines as $line) {
            // Assuming each message is on a new line and formatted like "Sender: Message Content"
            $parts = explode(':', $line, 2); // Split into sender and content
            $sender = trim($parts[0] ?? 'Unknown Sender');
            $content = trim($parts[1] ?? $line); // If no colon, treat whole line as content

            echo '<div class="message-item">';
            echo '<div class="message-sender">' . htmlspecialchars($sender) . '</div>';
            echo '<div class="message-content">' . htmlspecialchars($content) . '</div>';
            echo '</div>';
        }
    } else {
         echo '<p>No messages found.</p>';
    }
} else {
    echo '<p>Message file not found.</p>';
}

include("OSORIO_PORTFOLIO.html");



// Make sure the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Format data for saving
    $data_to_save = 
        "Name: $full_name\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Subject: $subject\n" .
        "Message: $message\n" .
        "------------------------\n";

    // Save to file
    if (file_put_contents("data.txt", $data_to_save, FILE_APPEND | LOCK_EX)) {
        echo "Message saved!";
    } else {
        echo "Error saving data.";
    }

} else {
    echo "No data submitted.";
}
?>






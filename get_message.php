<?php


$filename = "contacts.txt";
$messages = [];

if (file_exists($filename)) {
    $file = fopen($filename, "r");

    if ($file) {
        $current = [];

        while (($line = fgets($file)) !== false) {
            $line = trim($line);

            if ($line === "------------------------") {
                if (!empty($current)) {
                    $messages[] = $current;
                    $current = [];
                }
            } else {
                $parts = explode(":", $line, 2);
                $key = trim($parts[0] ?? "Unknown");
                $value = trim($parts[1] ?? "");
                $current[$key] = $value;
            }
        }

        if (!empty($current)) {
            $messages[] = $current;
        }

        fclose($file);
    }   
}

echo json_encode($messages);
?>
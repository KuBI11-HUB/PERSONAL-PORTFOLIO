<?php

$current_text = "../Data/About.txt";
if (file_exists("../Data/About.txt")) { 
    $current_text = file_get_contents("../Data/About.txt");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About Me</title>

    <link rel="stylesheet" href="../Style/style.css">
    <style>
    
        body {
            display: flex;
            justify-content: center;    
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        .edit-container {
            background: var(--second-bg-color);
            padding: 40px;
            border-radius: 20px;
            border: 2px solid var(--main-color);
            width: 80%;
            max-width: 800px;
            text-align: center;
        }
        textarea {
            width: 100%;
            height: 300px;
            background: #000;
            color: #fff;
            border: 1px solid #333;
            padding: 20px;
            font-size: 1.6rem;
            margin: 20px 0;
            resize: vertical;
            border-radius: 10px;
        }
        h2 { font-size: 3rem; margin-bottom: 2rem; }
    </style>
</head>
<body>

    <div class="edit-container">
        <h2>Edit <span>About Me</span></h2>
        
        <form action="../php/save_edited.php" method="POST">
    
            <textarea name="about" required><?php echo htmlspecialchars($current_text); ?></textarea>
            
            <div class="btn-group">
                <input type="submit" value="Save Changes" class="btn" style="cursor: pointer;">
                <a href="../HTML/index.php" class="btn" style="background: transparent; border: 2px solid var(--main-color);">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>
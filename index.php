<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
   
        <?php
            $books = [
                "Do android dream of electric sheeps",
                "The Langoliers",
                "Hail Mary",
                "Threat Vector",
                "Native Son",
                "Americana",
                "when we sleep in the dark"

            ];
        ?>
        <ul>
           <?php foreach ($books as $book) : ?>

            <li><?= $book ?></li>

           <?php endforeach; ?>
        </ul>
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php require_once 'partials/header.php' ?>


        <?php foreach ($contacts as $contact) : ?>
            
            <li><?= $contact->name . " // " . $contact->tell . " // " . $contact->email ; ?></li>

            
        <?php endforeach; ?>

    <?php require_once 'partials/footer.php' ?>    
</body>
</html>


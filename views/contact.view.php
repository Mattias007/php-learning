<?php require_once 'partials/header.php' ?>


    <?php foreach ($contacts as $contact) : ?>
        
        <li><?= $contact->name . " // " . $contact->tell . " // " . $contact->email ; ?></li>

        
    <?php endforeach; ?>

<?php require_once 'partials/footer.php' ?>
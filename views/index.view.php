<?php require_once 'partials/header.php' ?>

<?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ( $task->is_completed ): ?>
                <strike>
            <?php endif; ?>


                <?= $task->description; ?>


            <?php if ( $task->is_completed ): ?>
                </strike>
            <?php endif; ?>

        </li>
    <?php endforeach; ?>

<?php require_once 'partials/footer.php' ?>
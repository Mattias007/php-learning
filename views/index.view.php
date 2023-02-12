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

<h2>Sistesta task</h2>
<form method="POST" action='/task'>
    <input type="text"name='descrption'>
    <input type="submit"value='Salvesta'>
</form>

<?php require_once 'partials/footer.php' ?>
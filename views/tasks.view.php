

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
<form method="POST" action='/tasks'>
<input type="text"name='descrption'>
<input type="submit"value='Salvesta'>
</form>

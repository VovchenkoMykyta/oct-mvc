<h2>All tasks</h2>
<?php if (count($this->tasks) > 0): ?>

    <?php foreach ($this->tasks as $task): ?>
        <div>
            <span><?= $task['name'] ?></span>
            <form action="<?= \core\Route::getUrl('task', 'delete') ?>" method="post">
                <input type="hidden" name="id" value="<?= $task['id'] ?>">
                <input type="submit" value="delete" id="del">
            </form>
            <form action="<?= \core\Route::getUrl('task', 'showEdit') ?>" method="post">
                <input type="hidden" name="name" value="<?= $task['name'] ?>">
                <input type="hidden" name="id" value="<?= $task['id'] ?>">
                <input type="submit" value="edit" class="edit">
            </form>
        </div>
    <?php endforeach; ?>

<?php endif; ?>

<!--<form action="--><?//= \core\Route::getUrl('task', 'create') ?><!--" method="get">-->
<!--    <input type="submit" value="Add new Task" class="create">-->
<!--</form>-->
<a href="<?= \core\Route::getUrl('task', 'create')?>" class="create">Add new task</a>

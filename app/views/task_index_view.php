<h2>All tasks</h2>
<?php if(count($this->tasks) > 0):?>

    <?php foreach ($this->tasks as $task):?>
    <div>
        <?= $task['name']?>
        <form action="<?=\core\Route::getUrl('task', 'delete')?>" method="post">
            <input type="hidden" name="id" value="<?= $task['id']?>">
            <input type="submit" value="delete">
        </form>
        <form action="<?=\core\Route::getUrl('task', 'showEdit')?>" method="post">
            <input type="hidden" name="name" value="<?= $task['name']?>">
            <input type="hidden" name="id" value="<?= $task['id']?>">
            <input type="submit" value="edit">
        </form>
    </div>
    <?php endforeach;?>

<?php endif;?>
<a href="<?=\core\Route::getUrl('task', 'create')?>">Add new task</a>

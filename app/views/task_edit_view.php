<?php
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');

?>
<h2>Edit task</h2>
<form method="post" action="<?=\core\Route::getUrl('task', 'edit')?>">
    <label> Task name
        <input type="text" name="name" value="<?= $name ?>" id="edit-input">
        <input type="hidden" name="id" value="<?= $id ?>">
    </label>
    <input type="submit" value="edit" class="edit">
</form>
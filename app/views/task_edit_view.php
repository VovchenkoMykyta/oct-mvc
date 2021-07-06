<?php
$id = filter_input(INPUT_POST, 'id') ;
$name = '';
$model = new \models\TaskModel();
$tasks = $model->getTaskById($id);
foreach ($tasks as $item){
    $name .= $item['name'];
}
?>
<h2>Edit task</h2>
<form method="post" action="<?=\core\Route::getUrl('task', 'edit')?>">
    <label> Task name
        <input type="text" name="name" value="<?= $name ?>" id="edit-input">
        <input type="hidden" name="id" value="<?= $id ?>">
    </label>
    <input type="submit" value="edit" class="edit">
</form>
<h2>Edit task</h2>
<form method="post" action="<?=\core\Route::getUrl('task', 'edit')?>">
    <label> Task name
        <input type="text" name="name" value="<?= $_POST['name'] ?>" id="edit-input">
        <input type="hidden" name="id" value="<?= $_POST['id'] ?>">
<!--        <textarea></textarea>-->
    </label>
    <input type="submit" value="edit" class="edit">
</form>
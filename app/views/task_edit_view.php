<h2>Edit task</h2>
<form method="post" action="<?=\core\Route::getUrl('task', 'edit')?>">
    <label> Task name
        <input type="text" name="name" value="">
    </label>
    <input type="submit" value="edit">
</form>
<h2>Edit task</h2>
<form method="post" action="<?=\core\Route::getUrl('task', 'edit')?>">
    <label> Task name
        <textarea cols="30" rows="10"></textarea>
    </label>
    <input type="submit" value="edit">
</form>
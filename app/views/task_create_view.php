<h2>Create new task</h2>
<form method="post" action="<?=\core\Route::getUrl('task', 'store')?>">
    <label> Task name
        <input type="text" name="name" placeholder="Enter task name" id="create-input">
    </label>
    <input type="submit" value="create" class="create">
</form>
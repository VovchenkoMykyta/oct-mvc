<h2>All names</h2>
<?php if(count($this->tasks) > 0):?>

    <?php foreach ($this->tasks as $task):?>
    <div><?= $task['name']?></div>
    <?php endforeach;?>

<?php endif;?>
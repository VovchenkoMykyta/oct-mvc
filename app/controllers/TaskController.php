<?php


namespace controllers;

use core\BaseController;
use core\Route;
use core\View;
use models\TaskModel;

class TaskController extends BaseController
{
    public function index()
    {
        $task = new TaskModel(); // создаю модель

        $view = new View();
        $view->tasks = $task->all(); // выбираю все задачи и записываю в view

        $view->render('task_index_view.php', 'default_view.php');
    }

    public function create()
    {
        $view = new View();
        $view->render('task_create_view.php', 'default_view.php');
    }

    public function store()
    {
        $task = new TaskModel();
        $taskName = filter_input(INPUT_POST, 'name');
        $task->add($taskName);
        Route::redirect('task');
    }

    public function delete()
    {
        $task = new TaskModel();
        $taskId = filter_input(INPUT_POST, 'id');
        $task->delete($taskId);
        Route::redirect('task');
    }

    public function edit()
    {
        $task = new TaskModel();
        $taskId = filter_input(INPUT_POST,'id');
        $taskName = filter_input(INPUT_POST, 'name');
        $task->edit($taskName, $taskId);
        Route::redirect('task');
    }

    public function show()
    {
        $view = new View();
        $view->render('task_edit_view.php', 'default_view.php');
    }
}
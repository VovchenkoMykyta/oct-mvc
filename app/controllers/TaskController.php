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

    /**
     * create view to show create_view.php
     */
    public function create()
    {
        $view = new View();
        $view->render('task_create_view.php', 'default_view.php');
    }

    /**
     * create TaskModel and save new data to DataBase
     */
    public function store()
    {
        $task = new TaskModel();
        $taskName = filter_input(INPUT_POST, 'name');
        $task->add($taskName);
        Route::redirect('task');
    }

    /**
     * Delete an existing data from DataBase
     */
    public function delete()
    {
        $task = new TaskModel();
        $taskId = filter_input(INPUT_POST, 'id');
        $task->delete($taskId);
        Route::redirect('task');
    }

    /**
     * Edit (UPDATE) an existing task in DataBase
     */
    public function edit()
    {
        $task = new TaskModel();
        $taskId = filter_input(INPUT_POST,'id');
        $taskName = filter_input(INPUT_POST, 'name');
        $task->edit($taskName, $taskId);
        Route::redirect('task');
    }

    /**
     * create new view and show edit page
     * TODO think about another way to show pages with one function for all
     */
    public function showEdit()
    {
        $view = new View();
        $view->render('task_edit_view.php', 'default_view.php');
    }
}
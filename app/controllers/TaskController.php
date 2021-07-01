<?php


namespace controllers;

use core\BaseController;
use core\View;
use models\TaskModel;

class TaskController extends BaseController
{
    public function index(){
        $task = new TaskModel(); // создаю модель

        $view = new View();
        $view->tasks = $task->all(); // выбираю все задачи и записываю в view

        $view->render('task_index_view.php','default_view.php');
    }
}
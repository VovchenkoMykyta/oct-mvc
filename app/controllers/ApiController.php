<?php


namespace controllers;


use core\BaseController;
use models\TaskModel;

class ApiController extends BaseController
{
    public function index()
    {
        // TODO: Implement index() method.
    }

    public function getalltasks()
    {
        $task = new TaskModel();
        $tasks = $task->all();
        //формируем ответ в виде JSON
        $json = json_encode($tasks);
        header("Content_Type: application/json");
        echo $json;
    }

    public function createtask()
    {
        $task = new TaskModel();
        $taskName = filter_input(INPUT_POST, 'name');
        $task->add($taskName);
        header($_SERVER["SERVER_PROTOCOL"] . ' 201 Created', true, 201);
    }
}
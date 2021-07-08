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
}
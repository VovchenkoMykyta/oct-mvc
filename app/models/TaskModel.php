<?php


namespace models;


class TaskModel
{
    public $db;

    public function __construct()
    {
        $this->db = new \mysqli('localhost', 'root', '', 'oct-mvc');
    }

    public function all()
    {
        $sql = 'select * from tasks order by id;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
<?php


namespace models;


class TaskModel
{
    public $db;

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function all()
    {
        $sql = 'select * from tasks order by id;';
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function add($name)
    {
        $sql = "insert into tasks (name) values ('$name');";
        $this->db->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `oct-mvc`.`tasks` WHERE `tasks`.`id` = '$id';";
        $this->db->query($sql);
    }

    public function edit($id)
    {
        $sql = "UPDATE `oct-mvc`.`tasks` SET `name` =  WHERE `tasks`.`id` = '$id';";
        $this->db->query($sql);
    }
}
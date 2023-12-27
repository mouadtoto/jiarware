<?php
class Task
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function display($proid)
    {
        $data['proid'] = $proid;
        $this->db->query('SELECT * FROM tasks WHERE pro_id = :proid');
        $this->db->bind(':proid', $data['proid']);
        $row = $this->db->resultSet();
        return $row;
    }
    public function addtask($data){
        $this->db->query('INSERT INTO tasks(task_name,task_desc,task_deadline,pro_id,user) VALUES(:name,:desc ,:deadline,:pro, :user)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':desc', $data['desc']);
        $this->db->bind(':deadline', $data['deadline']);
        $this->db->bind(':pro', $data['pro']);
        $this->db->bind(':user', $data['user']);
        $this->db->execute();
    }
}

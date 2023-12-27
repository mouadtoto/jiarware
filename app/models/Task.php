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
        $this->db->query('SELECT * FROM tasks WHERE project = :proid');
        $this->db->bind(':proid', $data['proid']);
        $row = $this->db->resultSet();
        return $row;
    }
    
}

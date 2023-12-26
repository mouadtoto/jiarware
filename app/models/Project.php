<?php
class Project
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function addpro($data)
    {
        $this->db->query('INSERT INTO projects(project_name,project_desc,project_deadline,project_owner) VALUES(:name,:pro_desc ,:deadline,:owner)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':pro_desc', $data['desc']);
        $this->db->bind(':deadline', $data['deadline']);
        $this->db->bind(':owner', $data['owner']);
        $this->db->execute();
      
    }
    public function display($ownerid)
    {
        $data['owner']=$ownerid;
        $this->db->query('SELECT * FROM projects WHERE project_owner = :owner');
        $this->db->bind(':owner', $data['owner']);
        $row = $this->db->resultSet();
        return $row;
    }
    
}

<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function findUserbyEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE user_email=:email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function register($data)
    {
        $this->db->query('INSERT INTO users(user_fullname,user_email,user_pass) VALUES(:name , :email , :pass)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['pass']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function login($data)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :email ');
        $this->db->bind(':email', $data['email']);

        $row = $this->db->single();
        $hashedpass=$row['user_pass'];
        if (password_verify($data['pass'], $hashedpass)) {
           return $row;
        }else{
            echo false;
        }

    }
    
}

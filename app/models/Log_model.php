<?php
class Log_model extends Database{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function findByUsername ($username, $password)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username AND password = :password');
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        return $this->db->resultSet();
    }

    public function getdatabyusername ($username)
    {
        $this->db->query('SELECT * FROM users WHERE username = :username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }
}

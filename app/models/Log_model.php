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
}
<?php
class kelas_model {
    private $db;
    public function __construct(){
        $this->db = new Database;
}
    public function getAllfrek(){
        $query = 'SELECT * FROM kelas ORDER BY kelasfrek';
        $this->db->query($query);
        return $this->db->resultSet();
}  
}
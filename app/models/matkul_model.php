<?php
class matkul_model{
    private $db;

    public function __construct(){
        $this->db = new Database;

}

public function getAllmatkul(){
    $query = 'SELECT * FROM matkul  ORDER BY matkul';
    $this->db->query($query);
    return $this->db->resultSet();
}
}
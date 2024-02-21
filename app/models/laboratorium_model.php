<?php
class laboratorium_model {
    private $db;
    public function __construct(){
        $this->db = new Database;

}
    public function getAllLaboratorium(){
        $query = 'SELECT * FROM laboratorium ORDER BY namalab';
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
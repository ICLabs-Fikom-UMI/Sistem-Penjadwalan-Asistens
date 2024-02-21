<?php

class Profil_model  {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function insertProfilAsisten($data) {
    $this->db->query('INSERT INTO asisten (id, Nama, ProgramStudi, email) VALUES (:id, :Nama, :ProgramStudi, :email)');
    $this->db->bind('id', $_SESSION['id']);
    $this->db->bind('Nama', $data['Nama']);
    $this->db->bind('ProgramStudi', $data['ProgramStudi']);
    $this->db->bind('email', $data['email']);
    $this->db->execute();

    return $this->db->rowCount();
}
    public function getAllAsisten() {
        $query = 'SELECT * FROM asisten ta JOIN users tu ON ta.id=tu.id';
        $this->db->query($query);
        return $this->db->resultSet();
        
    }

    public function getbyIdAsisten($IdAsisten){
        $this->db->query('SELECT * FROM asisten WHERE  IdAsisten = :id');
        $this->db->bind('id', $IdAsisten);
        return $this->db->single();
    }
}
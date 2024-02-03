<?php

class Profil_model extends Database {
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
}
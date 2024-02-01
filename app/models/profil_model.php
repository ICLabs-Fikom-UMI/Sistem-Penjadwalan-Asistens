<?php

class Profil_model extends Database {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function insertProfilAsisten($data) {
    $this->db->query('INSERT INTO asisten (Nama, ProgramStudi, email) VALUES (:Nama, :ProgramStudi, :email)');
    $this->db->bind('Nama', $data['Nama']);
    $this->db->bind('ProgramStudi', $data['ProgramStudi']);
    $this->db->bind('email', $data['email']);
    $this->db->execute();

    return $this->db->rowCount();
}
}
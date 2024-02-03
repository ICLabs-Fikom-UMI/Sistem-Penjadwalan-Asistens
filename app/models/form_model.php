<?php

class Form_model extends Database {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function insertform($data) {
    $this->db->query('INSERT INTO form (hari, jam) VALUES (:hari, :jam)');
    $this->db->bind('hari', $data['hari']);
    $this->db->bind('jam', $data['Jam']);
    $this->db->execute();
    return $this->db->rowCount();
}
}
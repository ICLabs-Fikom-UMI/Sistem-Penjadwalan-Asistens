<?php

// session_start();

class Form_model extends Database {
    private $db;
    private $db2;

    public function __construct() {
        $this->db = new Database;
        $this->db2 = new Database;
    }

    public function getIdAsisten(){
        $id = $_SESSION['id'];
        $query = "SELECT asisten.IdAsisten FROM asisten WHERE asisten.id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $result = $this->db->single();
        return $result;
    }

    public function insertform($data) {
        $idAsisten = $this->getIdAsisten(); 
        $id = $idAsisten['IdAsisten'];

        // if($data['Jam'] != NULL && $data['siang'] == NULL && $data['sore'] == NULL && $data['malam'] == NULL){
            foreach($data['Jam'] as $value){
                $this->db->query('INSERT INTO form (IdAsisten , hari, jam) VALUES (:id, :hari, :jam)');
                $this->db->bind('id', $id);
                $this->db->bind('hari', $data['Hari']);
                $this->db->bind('jam', $value);
                $this->db->execute();
            }
}

    public function getAsisten(){
        $query = 'SELECT * FROM form tf JOIN asisten ta ON tf.IdAsisten=ta.IdAsisten';
        $this->db->query($query);
        return $this->db->resultSet();
    }
}
<?php
class Penjadwalan_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
        
}

public function getfrekuensi(){
    $query = 'SELECT * FROM frekuensi fk 
    JOIN asisten ta ON fk.IdAsisten=ta.IdAsisten
    JOIN laboratorium tl ON fk.idlab=tl.idlab
    JOIN matkul tm ON fk.idmatkul=tm.idmatkul
    JOIN kelas tk ON fk.idkelas=tk.idkelas';
    $this->db->query($query);
    return $this->db->resultSet();
}
 public function insertPenjadwalan($data){
    $this->db->query('INSERT INTO frekuensi (asisten, IdAsisten, idlab, idmatkul, idkelas, hari, jam) VALUES (:asisten, :IdAsisten, :idlab, :idmatkul, :idkelas, :hari, :jam )');
    $this->db->bind('asisten', $data['Asisten']);
    $this->db->bind('IdAsisten', $data['IdAsisten']);
    $this->db->bind('idlab', $data['idlab']);
    $this->db->bind('idmatkul', $data['idmatkul']);
    $this->db->bind('idkelas', $data['idkelas']);
    $this->db->bind('hari', $data['Hari']);
    $this->db->bind('jam', $data['Jam']);
    $this->db->execute();

 }
 
 public function hapusPenjadwalan($idfrek){
    $query ="DELETE FROM frekuensi WHERE idfrek = :idfrek";
    $this->db->query($query);
    $this->db->bind('idfrek', $idfrek);
    $this->db->execute();
 }
}
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
    JOIN kelas tk ON fk.idkelas=tk.idkelas ';
    $this->db->query($query);
   //  $this->db->bind('idfrek', $idfrek);
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

 public function getFrekuensiById($idfrek){

    $query = "SELECT asisten.Nama, matkul.matkul, laboratorium.namalab, kelas.kelasfrek, frekuensi.hari, frekuensi.jam, frekuensi.asisten
             FROM frekuensi
             INNER JOIN asisten ON frekuensi.IdAsisten = asisten.IdAsisten
             INNER JOIN matkul ON frekuensi.idmatkul = matkul.idmatkul
             INNER JOIN laboratorium ON frekuensi.idlab = laboratorium.idlab
             INNER JOIN kelas ON frekuensi.idkelas = kelas.idkelas
             WHERE frekuensi.idfrek = :id";

   

        $this->db->query($query);
        $this->db->bind('id', $idfrek);
        return $this->db->single();
 }

 public function ubahPenjadwalan($data){
  $query = "UPDATE frekuensi SET 
                  asisten = :Asisten,
                  IdAsisten = :IdAsisten,
                  idlab = :idlab,
                  idmatkul = :idmatkul,
                  idkelas = :idkelas,
                  hari = :hari,
                  jam  = :Jam
                WHERE  id = :idfrek";

   $this->db->bind('asisten', $data['Asisten']);
   $this->db->bind('IdAsisten', $data['IdAsisten']);
   $this->db->bind('idlab', $data['idlab']);
   $this->db->bind('idmatkul', $data['idmatkul']);
   $this->db->bind('idkelas', $data['idkelas']);
   $this->db->bind('hari', $data['Hari']);
   $this->db->bind('jam', $data['Jam']);
   $this->db->bind('idfrek', $data['idfrek']);
   $this->db->execute();

}


public function getjadwalAsisten($id){
   
}

}
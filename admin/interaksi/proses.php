<?php
class library
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "jafar_obatku";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
    public function add_data($nama_interaksi, $interaksi, $kode_obat)
    {
        $data = $this->db->prepare('INSERT INTO interaksi (nama_interaksi, interaksi, kode_obat) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $nama_interaksi);
        $data->bindParam(2, $interaksi);
        $data->bindParam(3, $kode_obat);

        $data->execute();
        return $data->rowCount();
    }
    
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM interaksi");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kode_interaksi){
        $query = $this->db->prepare("SELECT * FROM interaksi where kode_interaksi=?");
        $query->bindParam(1, $kode_interaksi);
        $query->execute();
        return $query->fetch();
    }

    public function update($kode_interaksi, $nama_interaksi, $interaksi, $kode_obat){
        $query = $this->db->prepare('UPDATE interaksi set nama_interaksi=?,interaksi=?,kode_obat=? where kode_interaksi=?');
        
        $query->bindParam(1, $nama_interaksi);
        $query->bindParam(2, $interaksi);
        $query->bindParam(3, $kode_obat);
		$query->bindParam(4, $kode_interaksi);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($kode_interaksi)
    {
        $query = $this->db->prepare("DELETE FROM interaksi where kode_interaksi=?");

        $query->bindParam(1, $kode_interaksi);

        $query->execute();
        return $query->rowCount();
    }

}
?>
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
    public function add_data($nama_obat, $gol_obat, $indikasi, $dosis, $pemberian, $kontraindikasi, $efeksamping, $hamilbusui, $interaksi_obat, $mekanisme_obat)
    {
        $data = $this->db->prepare('INSERT INTO obat (nama_obat, gol_obat, indikasi, dosis, pemberian, kontraindikasi, efeksamping, hamilbusui, interaksi_obat, mekanisme_obat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $nama_obat);
        $data->bindParam(2, $gol_obat);
        $data->bindParam(3, $indikasi);
        $data->bindParam(4, $dosis);
        $data->bindParam(5, $pemberian);
  		$data->bindParam(6, $kontraindikasi);
        $data->bindParam(7, $efeksamping);
		$data->bindParam(8, $hamilbusui);
        $data->bindParam(9, $interaksi_obat);
		$data->bindParam(10, $mekanisme_obat);

        $data->execute();
        return $data->rowCount();
    }
    
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM obat");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kode_obat){
        $query = $this->db->prepare("SELECT * FROM obat where kode_obat=?");
        $query->bindParam(1, $kode_obat);
        $query->execute();
        return $query->fetch();
    }

    public function update($kode_obat, $nama_obat, $gol_obat, $indikasi, $dosis, $pemberian, $kontraindikasi, $efeksamping, $hamilbusui, $interaksi_obat, $mekanisme_obat){
        $query = $this->db->prepare('UPDATE obat set nama_obat=?,gol_obat=?,indikasi=?,dosis=?,pemberian=?,kontraindikasi=?,efeksamping=?,hamilbusui=?,interaksi_obat=?,mekanisme_obat=? where kode_obat=?');
        
        $query->bindParam(1, $nama_obat);
        $query->bindParam(2, $gol_obat);
        $query->bindParam(3, $indikasi);
        $query->bindParam(4, $dosis);
        $query->bindParam(5, $pemberian);
  		$query->bindParam(6, $kontraindikasi);
        $query->bindParam(7, $efeksamping);
		$query->bindParam(8, $hamilbusui);
        $query->bindParam(9, $interaksi_obat);
		$query->bindParam(10, $mekanisme_obat);
		$query->bindParam(11, $kode_obat);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($kode_obat)
    {
        $query = $this->db->prepare("DELETE FROM obat where kode_obat=?");

        $query->bindParam(1, $kode_obat);

        $query->execute();
        return $query->rowCount();
    }

}
?>
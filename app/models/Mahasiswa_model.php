<?php 
class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Rian tri C",
    //         "nrp"  => "11043015",
    //         "email"=> "riant57@gmail.com",
    //         "jurusan"=>"Teknik Informatika",
    //     ],
    //     [
    //         "nama" => "Zainul",
    //         "nrp"  => "11043016",
    //         "email"=> "zainul@gmail.com",
    //         "jurusan"=>"Teknik Informatika",
    //     ],
    //     [
    //         "nama" => "Ichwan",
    //         "nrp"  => "11043017",
    //         "email"=> "ichwan@gmail.com",
    //         "jurusan"=>"Teknik Informatika",
    //     ],
    // ];

    // private $dbh;
    // private $stmt;

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    

    public function getAllMahasiswa()
    {
        //return $this->mhs;
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();

    }
}


?>
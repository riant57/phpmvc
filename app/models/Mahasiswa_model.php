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

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' .$this->table. ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO ".$this->table." VALUES (NULL, :nama, :nrp, :email, :jurusan)";
        //echo $query;
        $this->db->query($query);
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM ".$this->table." WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE ".$this->table." SET nama = :nama, nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";
        //echo $query;
        $this->db->query($query);
        
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM ".$this->table." WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}


?>
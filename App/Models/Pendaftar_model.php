<?php 

class Pendaftar_model {
    private $table = "pendaftar";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->result();
    }

    public function getDetail($id) {
        $this->db->query("SELECT * FROM $this->table WHERE id = :id");
        $this->db->bindVal("id", $id);
        return $this->db->single();
    }

    public function gambar() {
        $targetdir = "C:/xampp/htdocs/myMvc/asset/img/";
        $nameFile = str_replace(" ", "", $_FILES["profil"]["nama"]);
        $target = $targetdir . str_replace(" ", "", basename($nameFile));
        $expl = explode(".", $nameFile);
        $ext = strtolower(end($expl));

        if (file_exists($target)) {
            return "dah ada kawokoawkowa";
        }

        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            return "gambar bukan extensi";
        }

        move_uploaded_file($nameFile, $target);
        return $nameFile;
    }

    public function tambahData($data) {
        $this->db->query("INSERT INTO $this->table (profile, nama, tgl_lahir, alamat, email, hp, asal, jurusan) VALUES (:profil, :nama, :tgl_lahir, :alamat, :email, :hp, :asal, :jurusan)");
        $this->db->bindVal(":profil", $this->gambar());
        $this->db->bindVal(":nama", $data["nama"]);
        $this->db->bindVal(":tgl_lahir", date("Y-d-m", strtotime($data["tgl_lahir"])));
        $this->db->bindVal(":alamat", $data["alamat"]);
        $this->db->bindVal(":email", $data["email"]);
        $this->db->bindVal(":hp", $data["hp"]);
        $this->db->bindVal(":asal", $data["sekolah"]);
        $this->db->bindVal(":jurusan", $data["jurusan"]);
        $this->db->execute();
        return $this->db->affected();
    }
}
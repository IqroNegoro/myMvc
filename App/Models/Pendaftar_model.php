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
        $namaFile = basename($_FILES["profil"]["name"]);
        $bombomBAKUDAN = explode(".", $namaFile);
        $ext = strtolower(end($bombomBAKUDAN));
        $target = $targetdir . $namaFile;

        if ($ext != "jpg" && $ext != "jpeg" && $ext != "png") {
            return "Extensions tidak cocok";
        }

        if (file_exists($target)) {
            return "File sudah ada";
        }

        $randomName = uniqid() . "." . "$ext";
        move_uploaded_file($_FILES["profil"]["tmp_name"], $targetdir . $randomName);
        return $randomName;
    }

    public function tambahData($data) {
        $this->db->query("INSERT INTO $this->table (profile, nama, tgl_lahir, alamat, email, hp, asal, jurusan) VALUES (:profil, :nama, :tgl_lahir, :alamat, :email, :hp, :asal, :jurusan)");
        $this->db->bindVal(":profil", $this->gambar());
        $this->db->bindVal(":nama", $data["nama"]);
        $this->db->bindVal(":tgl_lahir", date("Y-m-d", strtotime($data["tgl_lahir"])));
        $this->db->bindVal(":alamat", $data["alamat"]);
        $this->db->bindVal(":email", $data["email"]);
        $this->db->bindVal(":hp", $data["hp"]);
        $this->db->bindVal(":asal", $data["sekolah"]);
        $this->db->bindVal(":jurusan", $data["jurusan"]);
        $this->db->execute();
        return $this->db->affected();
    }
    
    public function hapusData($id) {
        $this->db->query("DELETE FROM $this->table WHERE id = $id");
        $this->db->execute();
        return $this->db->affected();
    }
    
    public function editData($data) {
        if (strlen($_FILES["profile"]["nama"]) > 0) {
            $sql = "UPDATE $this->table SET profile = :profil, nama = :nama, tgl_lahir = :tgl_lahir, alamat = :alamat, email = :email, hp = :hp, asal = :asal, jurusan = :jurusan WHERE id =" . $data["id"];
            $this->db->bindVal(":profil", $this->gambar());
        } else {
            $sql = "UPDATE $this->table SET nama = :nama, tgl_lahir = :tgl_lahir, alamat = :alamat, email = :email, hp = :hp, asal = :asal, jurusan = :jurusan WHERE id =" . $data["id"];
        }
        $this->db->query($sql);
        $this->db->bindVal(":nama", $data["nama"]);
        $this->db->bindVal(":tgl_lahir", date("Y-m-d", strtotime($data["tgl_lahir"])));
        $this->db->bindVal(":alamat", $data["alamat"]);
        $this->db->bindVal(":email", $data["email"]);
        $this->db->bindVal(":hp", $data["hp"]);
        $this->db->bindVal(":asal", $data["sekolah"]);
        $this->db->bindVal(":jurusan", $data["jurusan"]);
        $this->db->execute();
        return $this->db->affected();
    }

    public function cariData($data) {
        $this->db->query("SELECT id, profile, nama, email, jurusan FROM pendaftar WHERE id LIKE '%$data%' OR nama LIKE '%$data%' OR email LIKE '%$data%' OR jurusan LIKE '%$data%'");
        return $this->db->result();
    }
    
}
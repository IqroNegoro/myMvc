<?php 

class Pendaftar extends Controller {
    public function index() {
        $data["judul"] = "Data Pendaftaran";
        $data["style"] = "asset/css/Pendaftar/index/style.css";
        $data["daftar"] = $this->model("Pendaftar_model")->getData();
        $this->view("templates/header", $data);
        $this->view("templates/nav");
        $this->view("templates/main");
        $this->view("pendaftar/index", $data);
        $this->view("templates/footer");
    }
    
    public function detail($nama) {
        $data["detail"] = $this->model("Pendaftar_model")->getDetail($nama);
        $data["style"] = "asset/css/Pendaftar/detail/style.css";
        $data["judul"] = $data["detail"]["nama"];
        $this->view("templates/header", $data);
        $this->view("templates/nav");
        $this->view("templates/main");
        $this->view("pendaftar/detail", $data);
        $this->view("templates/footer");
    }

    public function tambah() {
        if ($this->model("Pendaftar_model")->tambahData($_POST) > 0) {
            header("Location: http://localhost/myMvc/pendaftar");
        }
    }

}
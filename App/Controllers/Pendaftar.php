<?php 

class Pendaftar extends Controller {
    public function index() {
        $data["judul"] = "Data Pendaftaran";
        $data["style"] = "asset/css/Pendaftar/index/style.css";
        $data["script"] = "asset/js/pendaftar/index/script.js";
        $data["daftar"] = $this->model("Pendaftar_model")->getData();
        $this->view("templates/header", $data);
        $this->view("templates/nav");
        $this->view("templates/main");
        $this->view("pendaftar/index", $data);
        $this->view("templates/footer", $data);
    }
    
    public function detail($nama) {
        $data["detail"] = $this->model("Pendaftar_model")->getDetail($nama);
        $data["style"] = "asset/css/Pendaftar/detail/style.css";
        $data["judul"] = $data["detail"]["nama"];
        $data["script"] = "asset/js/pendaftar/detail/script.js";
        $this->view("templates/header", $data);
        $this->view("templates/nav");
        $this->view("templates/main");
        $this->view("pendaftar/detail", $data);
        $this->view("templates/footer", $data);
    }

    public function tambah() {
        if ($this->model("Pendaftar_model")->tambahData($_POST) > 0) {
            header("Location: http://localhost/myMvc/pendaftar");
        }
    }

    public function hapus($id) {
        if ($this->model("Pendaftar_model")->hapusData($id) > 0) {
            header("Location: http://localhost/myMvc/pendaftar");
        }
    }

    public function edit() {
        if ($this->model("Pendaftar_model")->editData($_POST) > 0) {
            header("Location: http://localhost/myMvc/pendaftar/detail/" . $_POST["id"]);
        }
    }

}
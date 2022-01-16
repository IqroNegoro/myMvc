<?php 

class Dashboard extends Controller {
    public function index() {
        $data["style"] = "asset/css/Dashboard/style.css";
        $data["judul"] = "Dashboard Admin";
        $data["pendaftar"] = $this->model("Dashboard_model")->getAll();
        $data["hariini"] = $this->model("Dashboard_model")->getHariIni();
        $data["kemarin"] = $this->model("Dashboard_model")->getKemarin();
        $this->view("templates/header", $data);
        $this->view("templates/nav");
        $this->view("templates/main");
        $this->view("dashboard/index", $data);
        $this->view("templates/footer");
    }
}
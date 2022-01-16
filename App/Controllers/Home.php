<?php 

class Home extends Controller {
    public function index() {
        $data["judul"] = "Homepage";
        $this->view("templates/header", $data);
        $this->view("templates/nav");
        $this->view("templates/main");
        $this->view("home/index");
        $this->view("templates/footer");
    }
}
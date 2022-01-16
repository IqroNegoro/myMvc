<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Dashboard_model {
    private $table = "pendaftar";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAll() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->result();
    }

    
    public function kemarin() {
        $this->db->query("SELECT DATE_SUB(DATE(NOW()), INTERVAL 1 DAY)");
        return $this->db->result();
    }

    public function getTanggal() {
        $this->db->query("SELECT DATE(NOW())");
        return $this->db->result();
    }

    public function getHariIni() {
        $tanggal = $this->getTanggal();
        $myArr = [];
        foreach ($tanggal as $x) {
            foreach ($x as $y) {
                array_push($myArr, $y);
            }
        }
        $this->db->query("SELECT * FROM pendaftar WHERE tanggal LIKE '$myArr[0]%'");
        return $this->db->result();
    }

    public function getKemarin() {
        $myArr = [];
        $kemarin = $this->kemarin();
        foreach ($kemarin as $x) {
            foreach ($x as $y) {
                array_push($myArr, $y);
            }
        }
        $this->db->query("SELECT * FROM pendaftar WHERE tanggal LIKE '$myArr[0]%'");
        return $this->db->result();
    }

}
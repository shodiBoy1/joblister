<?php

class Job {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
}
<?php
    include_once "database.php";
    class User {


        function __construct() {
            $this->db = new Database();
            $this->db->getPDO();
        }

        public function getUserId() {
            return $this->db->query("select username ");
        }
        public function getUsername() {
            return $this->db->query("");
        }

        public function getEmail() {
            return $this->db->query("");
        }

        public function getCredentials() {
            return $this->db->query("");
        }


    }
<?php
    class Database{

        protected $con;
        protected $servername="localhost";
        protected $username="root";
        protected $password="";
        protected $dbname="tbnv";

        public function __construct(){

            $this->con=mysqli_connect($this->servername, $this->username, $this->password);
            mysqli_select_db($this->con, $this->dbname);
            mysqli_set_charset($this->con,'utf8');
        }
    }
?>
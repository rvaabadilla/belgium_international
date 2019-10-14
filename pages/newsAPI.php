<?php
    //news api
    require 'globaldbconnection.php' ;
    class News{
        public $conn;
        public function __construct()
        {
            $this->conn = get_db_connection();
        }

        public function fetch_all_news() {
            $query = "SELECT * FROM news";
            $results = mysqli_query($this->conn, $query) ;
            $rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
            return $rows;
        }
        public function fetch_news_by_id(){
            $query = "SELECT * FROM news WHERE id = $id";
            $results = mysqli_query($this->conn, $query) ;
            $rows = mysqli_fetch_all($results, MYSQLI_ASSOC);
            return $rows;
        }
        
    }
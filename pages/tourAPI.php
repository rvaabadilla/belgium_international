<?php
//TourAPI, for the virtual tour
    require 'globaldbconnection.php' ;
    class Tour{
        public $conn;
        public $current_place = null ;

        public function __construct()
        {
            $this->conn = get_db_connection();
        }
        public function fetch_place_by_id($id){
            $query = "SELECT * FROM Digitour WHERE id=" . $id ;
            $current_place = mysql_fetch_array($result);
        }

        public function fetch_place_by_name($name){
            $query = "SELECT * FROM Digitour WHERE name='" . $name . "'" ;
            $current_place = mysql_fetch_array($result);
        }

        public function move($direction){ //use "north", south, east, west
            switch($direction){
                case "north":
                    $current_place == fetch_place_by_id($current_place["adjacent_north_id"]) ;
                    break;
                case "south":
                    $current_place == fetch_place_by_id($current_place["adjacent_south_id"]) ;
                    break;
                case "west":
                    $current_place == fetch_place_by_id($current_place["adjacent_west_id"]) ;
                    break;
                case "east":
                    $current_place == fetch_place_by_id($current_place["adjacent_east_id"]) ;
                    break;
                default:
                    Print '<script>alert("Direction invalid!");</script>'; 

            }
        } 
        public function get_current_place_image(){
            if($current_place == null){
                Print '<script>alert("Place not set!");</script>';    
            }
            return  $current_place["image_path"] ;
        }

        public function get_current_place_name(){
            global $current_place ;
            if($current_place == null){
                Print '<script>alert("Place not set!");</script>';    
            }
            return  $current_place["name"] ;
        }

        public function get_current_place_description(){
            global $current_place ;
            if($current_place == null){
                Print '<script>alert("Place not set!");</script>';    
            }
            return  $current_place["description"] ;       
        }
    }
?>
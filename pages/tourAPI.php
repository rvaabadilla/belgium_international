<?php
//TourAPI, for the virtual tour
    require 'globaldbconnection.php' ;

    $conn = get_db_connection() ;
    $query = "SELECT count(1) FROM Trivia" ;
    $results = mysqli_query($conn, $query) ;
    $row = mysql_fetch_array($result);
    $current_place = null ;

    function fetch_place_by_id($id){
        global $current_place ;
        $query = "SELECT * FROM Digitour WHERE id=" . $id ;
        $current_place = mysql_fetch_array($result);
    }

    function fetch_place_by_name($name){
        global $current_place ;
        $query = "SELECT * FROM Digitour WHERE name='" . $name . "'" ;
        $current_place = mysql_fetch_array($result);
    }

    function move($direction){ //use north, south, east, west
        global $current_place ;
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
    function get_current_place_image(){
        global $current_place ;
        if($current_place == null){
            Print '<script>alert("Place not set!");</script>';    
        }
        return  $current_place["image_path"] ;
    }

    function get_current_place_name(){
        global $current_place ;
        if($current_place == null){
            Print '<script>alert("Place not set!");</script>';    
        }
        return  $current_place["name"] ;
    }

    function get_current_place_description(){
        global $current_place ;
        if($current_place == null){
            Print '<script>alert("Place not set!");</script>';    
        }
        return  $current_place["description"] ;       
    }

?>
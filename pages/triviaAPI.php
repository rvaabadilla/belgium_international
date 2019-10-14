<?php
//TriviaAPI, for use in the Trivia Minigame
    require 'globaldbconnection.php' ;
    class Trivia{
        public $conn ;
        public $maxQuestionCount ;
        
        public function __construct()
        {
            $this->conn = get_db_connection();
            $query = "SELECT count(1) FROM Trivia" ;
            $results = mysqli_query($conn, $query) ;
            $row = mysql_fetch_array($result);
        
            $maxQuestionCount = $row[0] ;
        }

        function fetch_question($id){
            global $conn, $maxQuestionCount ;
            $questionResult = mysqli_query($conn, "SELECT question FROM Trivia WHERE trivia_id=" . $id) ;
            $row = mysql_fetch_array($result);
            return $row['question'] ; //returns the "question" field of database question id no. <$id>
        }
    
        function fetch_answer($id){
            global $conn, $maxQuestionCount ;
            $questionResult = mysqli_query($conn, "SELECT answer FROM Trivia WHERE trivia_id=" . $id) ;
            $row = mysql_fetch_array($result);
            return $row['answer'] ; //returns the "answer" field of database question id no. <$id>
        }
    
        function fetch_description($id){
            global $conn, $maxQuestionCount ;
            $questionResult = mysqli_query($conn, "SELECT description FROM Trivia WHERE trivia_id=" . $id) ;
            $row = mysql_fetch_array($result);
            return $row['description'] ; //returns the "description" field of database question id no. <$id>
        }
    
        function get_rand_question_id(){
            global $maxQuestionCount ;
            return rand(0, $maxQuestionCount - 1) ;
        }
    
        function check_answer($id, $answer){
            if(fetch_answer($id) === $answer){
                return true;
            }
            return false;
        }
    }



?>
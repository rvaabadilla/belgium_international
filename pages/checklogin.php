<?php
    require 'globaldbconnection.php' ;
    session_start();
    $username = sanitize_input($_POST['username']);
    $password = ($_POST['password']);
    
    $conn = get_db_connection();
    $query = "SELECT * FROM Users WHERE username='" . $username . "'";
    $results = mysqli_query($conn, $query); //Query the users table if there are matching rows equal to $username

    if(!$results){ //Checks if $results is not empty, if it is, then there is no match
    ?> 
       <div class="alert alert-warning alert-dismissible fade show" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
         <strong>Incorrect Username or Password!</strong> 
       </div>
       
       <script>
         $(".alert").alert();
       </script> 
    <?php
    }
    else{
        $row = mysqli_fetch_array($results) ;

        if($row['password'] == $password){
            $_SESSION['user'] = $username ; //set the username in a session. This serves as a global variable
        }
        else
        {
            ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <strong>Incorrect Username or Password!</strong> 
        </div>
        
        <script>
            $(".alert").alert();
        </script> 
        <?php
        }

    }
	 
 function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
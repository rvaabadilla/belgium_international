<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Register</h1>
              <p class="text-h3">Create an account, just for the sake of having one!</p>
            </div>
          </div>
          <form action="../pages/checklogin.php" method="post">
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
          </div>
          <div class="row justify-content-start mt-4">
            <div class="col">
              <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
  include 'globaldbconnection.php' ;
  $badinput = true;

  
  if($_SERVER["REQUEST_METHOD"] == "POST"){
       $username = sanitize_input($_POST["username"]) ;
       $password =$_POST["password"];

  $conn = get_db_connection() ;
  $query = "SELECT username FROM Users" ;
  $results = mysqli_query($conn, $query);
  $auth = false;
  
  while($row = mysqli_fetch_array($results)){ //iterate through $results, store current row into $row
    if($username == $row['username']){
        $exists = true; // user exists!
        
        if($password == $row['password']){
            $auth = true ;
        }
    } //endif
  } //endwhile
    
} //enduf
  
  function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>


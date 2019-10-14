<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Register</h1>
              <p class="text-h3">Create an account, so you can say you have one!</p>
            </div>
          </div>
          <form action="pages/register.php" method="post">
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="col">
              <input type="password" name="confirmPassword"class="form-control" placeholder="Confirm Password">
            </div>
          </div>
          <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  I have read and accept the <a href="#">Terms and Conditions</a>
                </label>
              </div>
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
       $confirmpass =$_POST["confirmPassword"];
  //    $password = sanitize_input($_POST["password"]) ; unsure if we really need to sanitize these!
  //    $confirmpass = sanitize_input($_POST["confirmPassword"]) ;
    
  if($password !== $confirmpass){
    Print '<script>alert("Passwords do not match!");</script>';
    Print '<script>location.replace("../index.php?page=register");</script>';
  }

  $conn = get_db_connection() ;
  $query = "SELECT username FROM Users" ;
  $results = mysqli_query($conn, $query);
  $exists = false;
  
  while($row = mysqli_fetch_array($results)){ //iterate through $results, store current row into $row
    if($username == $row['username']){
			$exists = true; // user exists!
			Print '<script>alert("Username has been taken!");</script>';
			Print '<script>window.location.replace("../index.php?page=register");</script>';
		} //endif
  } //endwhile
  
	if(!$exists){ // checks if user already exists
		mysqli_query($conn, "INSERT INTO Users (username, password) VALUES ('$username','$password')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; 
		Print '<script>window.location.replace("../index.php?page=register");</script>'; 
  } //endif
  
  } //endif
    
  
  
  function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
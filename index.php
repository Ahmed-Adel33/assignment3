

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
 
 
 
  <form   action="<?php    $_SERVER['PHP_SELF'];?>"  method="post">
 
  <input type="hidden"   value="1" name="register"> 
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName"  name="name" required aria-describedby="" placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email"   class="form-control" id="exampleInputEmail1" name="email" required aria-describedby="emailHelp" placeholder="Enter email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword">New Password</label>
    <input type="password"   class="form-control" id="exampleInputPassword1" required name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Address</label>
    <input type="text"   class="form-control" id="exampleInputPassword1" required name="address"  placeholder="address">
  </div>

  <div class="form-group">
    
    <a href="http://localhost/nti%20assignment/assignment3/index.php">LinkedIn</a>

  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>








</body>
</html>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = ($_POST["name"]);
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = ($_POST["email"]);
    }
    if (empty($_POST["password"])) {
        $passwordErr = "password is required";
      } else {
        $password = ($_POST["password"]);
      }

      if (empty($_POST["address"])) {
          $addressErr = "Address is required";
        } else {
          $address = ($_POST["address"]);
        }
        

  

  }






?>
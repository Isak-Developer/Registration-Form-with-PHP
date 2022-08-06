<?php 
include 'connect.php';
if (isset($_POST['submit'])){
  $username =$_POST['user-name'];
  // $email =$_POST['email'];
  $password =$_POST['password'];

  // $sql = "insert into `login_users` (username, email, password) values ('$username', '$email', '$password')";
  $sql = "insert into `users` (username, password) values ('$username', '$password')";

  $result = mysqli_query($connection, $sql);

  if ($result){
    header ('location:display.php');
  }else {
    die(mysqli_error($connection));
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
      href="https://bootswatch.com/5/flatly/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
      <div class="container mt-5">
      <h1 class="display-3 text-center">Sign Up for this Form</h1>

      <form id="conatct-form" method="post">
        <div class="form-group">
          <label>User Name</label>
          <input type="text" id="user-name" name='user-name' class="form-control" />
        </div>

        <div class="form-group mt-4 ">
          <label>Password</label>
          <input type="password" id="password" name ='password' class="form-control" />
        </div>

        <div class="d-grid  mt-4">
          <button class="btn btn-lg btn-primary col-6 mx-auto d-block" type="submit" name='submit'>
            Add User
          </button>
        </div>
      </form>
    </div>
    
</body>
</html>
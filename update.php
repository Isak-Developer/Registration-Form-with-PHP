<?php 
include 'connect.php';
$id = $_GET['update_id'];

$sql="select *from `users` where user_id=$id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['user_id'];
$username = $row['username'];
$password = $row['password'];

if (isset ($_POST['submit'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];

    $sql ="update `users` set user_id =$id, username='$username', password='$password' where 
    user_id=$id";
    $result =mysqli_query($connection,$sql);

    if ($result){
        header('location:display.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"
      href="https://bootswatch.com/5/flatly/bootstrap.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
      <div class="container mt-5">
      <h1 class="display-3 text-center">Sign Up for this Form</h1>

      <form id="conatct-form" method="post">
        <div class="form-group">
          <label>User Name</label>
          <input type="text" id="user-name" name='user-name' class="form-control" value= "<?php
          echo $username ?>" />
        </div>

        <div class="form-group mt-4 ">
          <label>Password</label>
          <input type="password" id="password" name ='password' class="form-control" value="<?php
          echo $password ?>"/>
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
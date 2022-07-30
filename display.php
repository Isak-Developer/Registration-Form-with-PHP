<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>

  <button type="button" class="btn btn-primary mt-5" style="margin:30px;"><a href="index.php" style="color:white;">Add User</a></button>


 <table class="table table-hover mt-4 text-center">
        <thead>
          <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="contact-list">
            
            <?php
            $sql = 'select user_id , username from users';
            $result = mysqli_query($connection , $sql);
            if ($result){
                while($row=mysqli_fetch_assoc($result)){
                $id =$row['user_id'];
                $username =$row['username'];
                echo '
                <tr>
                <td>'.$id.'</td>
                <td>'.$username.'</td>
                 <td>
                    <button class="btn btn-info"><a href="update.php?update_id='.$id.'" style="color:white;">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleted_id='.$id.'" style="color:white;">Delete</a></button>
                    </td>
              </tr>
                ';
                }
            } 
            ?>
        </tbody>
      </table>
</body>
</html>
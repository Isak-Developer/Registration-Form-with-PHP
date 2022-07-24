<?php
$connection = new mysqli('localhost', 'root', '' , 'login_user');

if (!$connection){
    die(mysqli_error($connection));
}
?>
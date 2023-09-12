<?php include "../db/connection.php"; ?>
<?php
session_start();
if($_POST['username']){
    $post_username = $_POST['username'];
}
else {
    echo "no values found";
}

if($_POST['password'])
{
    $post_password= $_POST['password'];
}
else
{
    echo "No values found";
}
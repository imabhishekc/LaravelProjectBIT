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


$sql= "select * from users where username='" . $post_username . "'";
$result = $conn->query($sql);
$rows = mysqli_fetch_assoc($result);
if($rows['username']== $post_username && password_verify($post_password, $rows['password'])){
    $_SESSION['login_in']=true;
    header('Location:../admin/dashboard.php');
}
else{
    $_SESSION['error_message']="Credentials do not match";
    header('Location:../login.php');
}
?>
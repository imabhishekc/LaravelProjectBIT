<?php
        session_start();
        if($_SESSION['logged_in']){
            echo "Not logged in. Login now and see the dashboard";
            $_SESSION['log_info'] = "login to see the dashboard";
            header("Location:../login.php");
        }
?>
<?php echo "This is dashboard"; ?>        
<?php include "layouts/header.php"; ?>
<body>
    <!-- var_dump($_POST['username']); -->
<?php echo password_hash("swagat0v0", PASSWORD_DEFAULT); ?>
    <?php
    session_start();
    if(isset($_SESSION["error_message"])) echo $_SESSION['error_message'];
    session_destroy();
    ?>
    
    <form action="./actions/login.php" method="post">
    <input type="text" name="username" placeholder="Enter username"/>
    <input type="password" name="password" placeholder="Enter your password"/>
    <button type="submit">Login</button>

    </form>
</body>
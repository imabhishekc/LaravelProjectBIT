<?php include "./db/connection.php"; ?>
<?php include "./layouts/header.php"; ?>
<body>

    <?php
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        //Output data of each row

        echo <<<HTML
            <table>
            </table>
        HTML;

        while($row = $result->fetch_assoc()){
            echo "id:" . $row["id"]. "name: " . $row["name"]. "Phone". $row["phone"]. "Address". $row["address"]. "<br>";
        } 
    }else{
        echo "0 results";
    }
    ?>

    <div style="margin-top: 20px; display:flex; width: 200px; justify-content: space-between;">
    <a href="login.php">Signin now</a>
    <a href="register.php">Register now</a>
    </div>

</body>
</html>
<?php
    $mail = $_REQUEST["username"];
    $pswd = $_REQUEST["password"];

    session_start();

    try {

        include("database.php");

        $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $stmt = $con->prepare("SELECT * FROM forms WHERE email=? AND fname=?");
        $stmt->bindParam(1, $mail);
        $stmt->bindParam(2, $pswd);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $_SESSION["firstname"] = $pswd;
            $_SESSION["mailid"] = $mail;
            header("Location: index.php");
            exit();
        } else {
            echo "<br><br><br><center><h2>Incorrect email or password</h2></center>";
        }

        $con = null;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>

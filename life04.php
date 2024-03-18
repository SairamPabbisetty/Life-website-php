<?php
    $pen = $_REQUEST["pen"];
    $thou = $_REQUEST["quote"];

    session_start();
    $mail_id = $_SESSION["mailid"];

    try {
        
        include("database.php");

        $con = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $con->prepare("INSERT INTO uploads(penname, email, thought) VALUES(?,?,?)");
        $stmt->bindParam(1, $pen);
        $stmt->bindParam(2, $mail_id);
        $stmt->bindParam(3, $thou);
        $stmt->execute();

        if($stmt) {
            header("Location: life04-1.html");
            exit();
        }

        $con = null;
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>

<?php
    $pen = $_REQUEST["pen"];
    $thou = $_REQUEST["quote"];

    session_start();
    $mail_id = $_SESSION["mailid"];

    if($mail_id == null) {
        header("Location: login.html");
        exit();
    }

    try {
        
        include("database.php");

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

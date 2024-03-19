<?php
$mail = $_REQUEST["username"];
$npswd = $_REQUEST["new-password"];
$cpswd = $_REQUEST["confirm-password"];

if ($npswd === $cpswd) {
    try {

        include("database.php");

        $stmt = $con->prepare("UPDATE forms SET fname=:npswd WHERE email=:mail");
        $stmt->bindParam(':npswd', $npswd);
        $stmt->bindParam(':mail', $mail);

        if ($stmt->execute()) {
            header("Location: login.html");
            exit;
        }

    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "<h1>New password and current password are not the same....</h1>";
}
?>

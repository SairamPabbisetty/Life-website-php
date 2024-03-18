<?php
$fnam = $_REQUEST["First_Name"];
$lnam = $_REQUEST["Last_Name"];
$mail = $_REQUEST["Email_Id"];
$phn = $_REQUEST["Mobile_Number"];
$gen = $_REQUEST["Gender"];
$cit = $_REQUEST["City"];

include("database.php");

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO forms (fname, lname, email, phno, gend, city) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $fnam);
    $stmt->bindParam(2, $lnam);
    $stmt->bindParam(3, $mail);
    $stmt->bindParam(4, $phn);
    $stmt->bindParam(5, $gen);
    $stmt->bindParam(6, $cit);

    $stmt->execute();
    
    $count = $stmt->rowCount();
    
    if ($count > 0) {
        header("Location: loginsample.html");
        exit;
    }
    
    $conn = null;
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

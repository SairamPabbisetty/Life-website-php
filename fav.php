<?php
session_start();

$first_name = $_SESSION['firstname'];
$mail_id = $_SESSION['mailid'];

try {

    include("database.php");
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $options = $_REQUEST['opt'];

    if (!empty($options)) {
        $stmt1 = $conn->prepare("SELECT * FROM favs WHERE fname = :first_name AND email = :mail_id");
        $stmt1->bindParam(':first_name', $first_name);
        $stmt1->bindParam(':mail_id', $mail_id);
        $stmt1->execute();

        $arr = [];
        while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
            $arr[] = $row['fav'];
        }

        $set = array_unique($arr);
        $userArray = array_values($set);

        $result = [];
        foreach ($options as $element) {
            if (!in_array($element, $userArray)) {
                $result[] = $element;
            }
        }
        
        $stmt2 = $conn->prepare("INSERT INTO favs (fname, email, fav) VALUES (:first_name, :mail_id, :element)");
        foreach ($result as $a) {
            $stmt2->bindParam(':first_name', $first_name);
            $stmt2->bindParam(':mail_id', $mail_id);
            $stmt2->bindParam(':element', $a);
            $stmt2->execute();
        }
        
        header("Location: profile.php");
        exit;
    } else {
        header("Location: life02-1.html");
        exit;
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

<?php

    include("database.php");

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM details");
    $stmt->execute();

    echo "<center><table border='1px'>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>person</th>
            </tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['person']."</td>";
        echo "</tr>";
    }
    echo "</table></center>";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>

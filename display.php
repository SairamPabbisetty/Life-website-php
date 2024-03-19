<?php
try {
    
    include("database.php");

    $stmt = $con->prepare("SELECT * FROM details");
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

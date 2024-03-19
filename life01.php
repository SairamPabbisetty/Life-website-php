<!DOCTYPE html>
<html>
<head>
    <title>Quotes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        $emo = $_REQUEST["option"];

        try {
            
            include("database.php");

            $stmt = $con->prepare("SELECT quote, author FROM quotes WHERE zenre=:emo");
            $stmt->bindParam(':emo', $emo);
            $stmt->execute();

            echo "<h1>$emo</h1>";

            echo "<div class=\"quote\">";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $quote = $row["quote"];
                $author = $row["author"];
                echo "<blockquote><h3>$quote  ~  $author</h3></blockquote>";
            }
            echo "</div>";
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
</body>
</html>

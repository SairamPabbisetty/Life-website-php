<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
            margin: 0;
            background-color: #333;
            color: #fff;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 20px;
        }

        .box {
            width: 60%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
        }

        .box h2 {
            margin-top: 0;
            font-size: 1.5rem;
            color: #333;
        }

        .box h3 {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #555;
        }

        .box a {
            text-decoration: none;
            color: #ff6666;
        }

        .box a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Profile</h1>
    <div class="container">
        <div class="box">
            <?php
                $first_name = $_SESSION["firstname"];
                $mail_id = $_SESSION["mailid"];

                if($mail_id == null) {
                    header("Location: login.html");
                    exit();
                } else {
                    try {
                        include("database.php");
                        
                        $stmt1 = $con->prepare("SELECT * FROM forms WHERE fname=? AND email=?");
                        $stmt1->execute([$first_name, $mail_id]);
                        $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);
                        if($row1) {
                            echo "<h2>User Details</h2>";
                            echo "<h3>First Name: " . $row1['fname'] . "</h3>";
                            echo "<h3>Last Name: " . $row1['lname'] . "</h3>";
                            echo "<h3>Email: " . $row1['email'] . "</h3>";
                            echo "<h3>Phone: " . $row1['phno'] . "</h3>";
                            echo "<h3>Gender: " . $row1['gend'] . "</h3>";
                            echo "<h3>City: " . $row1['city'] . "</h3>";
                        }
    
                        $stmt2 = $con->prepare("SELECT * FROM uploads WHERE penname=? AND email=?");
                        $stmt2->execute([$first_name, $mail_id]);
                        echo "<div class=\"box\"><h2>Uploads</h2>";
                        while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                            echo "<h3>" . $row2['thought'] . " ~ " . $row2['penname'] . "</h3>";
                        }
                        echo "</div>";

                        $con = null;
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>

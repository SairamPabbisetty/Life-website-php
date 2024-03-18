<?php
    session_start();
    unset($_SESSION["mailid"]);
    unset($_SESSION["firstname"]);
    header("Location: index.php");
    exit();
?>
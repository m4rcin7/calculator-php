<?php
    session_start();

    if (isset($_SESSION["user_id"]) && $_SESSION["userid"] === true) {
        header("Location: welcome.php");
        exit;
    }
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forum</title>
</head>
<body>


      <?php
        if(isset($_SESSION['logged_in'])) {
            echo 'Hello, ' . $_SESSION['user_name'] . ' | <a href="../login/logout.php">Sign out</a>';
        }
        else { ?>
            <a href="homepage.php">Sign in</a> or
            <a href="homepage.php">create an account</a>.
        <?php } ?>

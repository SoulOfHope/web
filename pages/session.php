<?php
2
// Start the session
3
session_start();
4
5
// if the user is already logged in then redirect user to welcome page
6
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
7
    header("location: welcome.php");
8
    exit;
9
}
10
?>

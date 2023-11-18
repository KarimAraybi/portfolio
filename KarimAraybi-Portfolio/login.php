<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $jsonData = file_get_contents('info.json');
    $users = json_decode($jsonData, true);

    if (isset($users[$username]) && $users[$username]["password"] == $password) {
        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();
    } else {
        header("Location: signup.html");
        exit();
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sex = $_POST["sex"];

    $jsonData = file_get_contents('info.json');
    $users = json_decode($jsonData, true);


    if (isset($users[$username])) {

        header("Location: signup_error.php");
        exit();
    }


    $users[$username] = [
        "password" => $password,
        "sex" => $sex

    ];
    
    $updatedJsonData = json_encode($users, JSON_PRETTY_PRINT);

    file_put_contents('info.json', $updatedJsonData);

    header("Location: index.html");
    exit();
}
?>

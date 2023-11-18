<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        "username" => $_POST["username"],
        "password" => $_POST["password"],
        "sex" => $_POST["sex"]
    );

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('info.json', $jsonData);

    header("Location: home.html");
    exit();
}
?>

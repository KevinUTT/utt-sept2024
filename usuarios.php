<?php

    const admin = ["login" => "admin", "password" => "admin123"];
    
    $login = $_POST["login"];
    $password = $_POST["password"];
    
    header("Content-Type: text/plain");
    if($login === admin["login"] && $password === admin["password"] ) {
        header("HTTP/1.1 200 OK");
        echo "Bienvenido admin";
    } else {
        header("HTTP/1.1 403 Forbidden");
        echo "Login: $login, Pass: $password";
    }
?>
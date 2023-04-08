<?php
$servername = "localhost";
$database = "tracking";
$username = "root";
$password = "";
// Создаем соединение
$mysqli = new mysqli($servername, $username, $password, $database);
// Проверяем соединение
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
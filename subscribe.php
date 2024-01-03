<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datebase";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$email = $_POST['email'];


// Вставка данных в базу данных
$sql = "INSERT INTO subscribe (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Вы Подписались";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<?php
// Сохранение данных формы в файл
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $data = "Name: $name\nComment: $comment\n";
    file_put_contents('../data/comments.txt', $data, FILE_APPEND);
    header("Location: /index.php"); // Перенаправление обратно на страницу формы
}

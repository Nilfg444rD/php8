<?php
require './views/components/header.php';
require './views/components/footer.php';
require './views/components/form.php';
require './views/components/comments.php';

// Основная структура страницы
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include './views/components/header.php'; ?>
    </header>
    <main>
        <?php include './views/components/form.php'; ?>
        <?php include './views/components/comments.php'; ?>
    </main>
    <footer>
        <?php include './views/components/footer.php'; ?>
    </footer>
</body>
</html>

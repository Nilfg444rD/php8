<?php
// Отображение сохранённых комментариев
$comments = file_get_contents('../data/comments.txt');
echo nl2br($comments);

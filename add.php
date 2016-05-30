<?php

require __DIR__ . '/models/news.php';

$news->add_News(
    $_POST['title'],
    $_POST['text'],
    $_POST['author']
);

header('Location: /index.php');
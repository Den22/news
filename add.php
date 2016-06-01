<?php

require_once __DIR__ . '/models/News.php';
require_once __DIR__ . '/classes/DataBase.php';

$news = new News;

$news->addNews(
    $_POST['title'],
    $_POST['text'],
    $_POST['author']
);

header('Location: /index.php');
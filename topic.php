<?php

require_once __DIR__ . '/models/News.php';
require_once __DIR__ . '/classes/DataBase.php';


$id = $_GET['id'];
$topic = News::getOne($id);

include __DIR__ . '/views/topic.php';

<?php

require_once __DIR__ . '/models/News.php';
require_once __DIR__ . '/classes/DataBase.php';


$items = News::getAll();

include __DIR__ . '/views/index.php';
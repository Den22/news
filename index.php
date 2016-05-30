<?php

require __DIR__ . '/models/news.php';

$newsInfo = $news->getNewsList();

require_once __DIR__ . '/views/index.php';
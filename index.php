<?php

require_once __DIR__ . '/models/news.php';

$newsInfo = $news->getNewsList();

include __DIR__ . '/views/index.php';
<?php

require __DIR__ . '/models/news.php';

$topic_id = $_GET['topic_id'];
$topic = $news->get_News($topic_id);

include __DIR__ . '/views/topic.php';

<?php

/**
 * Class NewsModel
 * @property $title
 * @property $text
 * @property $author
 * @property $datetime
 */
class NewsModel
    extends AbstractModel
{
    protected static $table = 'news';
}
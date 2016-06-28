<?php

namespace Application\Models;

/**
 * Class NewsModel
 * @property $title
 * @property $text
 * @property $author
 * @property $datetime
 */
class News extends AbstractModel
{
    protected static $table = 'news';
}

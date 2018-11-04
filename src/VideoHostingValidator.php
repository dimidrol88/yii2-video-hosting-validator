<?php

namespace dimidrol88\videoHostingValidator;

use yii\validators\RegularExpressionValidator;

/**
 * 
 * Yii2 validator for video hosting (youtube, vimeo)
 * 
 * @copyright Copyright (c) dimidrol88 <kuznecov_da@inbox.ru>
 * @author dimidrol88
 */
class VideoHostingValidator extends RegularExpressionValidator
{
    /**
     * 
     * Шаблон для хостингов youtube и vimeo.
     * 
     * @var string
     */
    public $pattern = '#^(https|http)://((www.)?)([a-zA-Z0-9_-][.]*){1,}(com|ru){1}/(embed|video){1}/([a-zA-Z0-9_-]+)(/{0,1})$#s';

    /**
     * 
     * @var string 
     */
    public $message = 'Не верный формат(https://www.youtube.com/embed/video_code или https://player.vimeo.com/video/video_code).';

}

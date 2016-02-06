<?php

/**
 * Helper for site specific configuration and methods
 */

namespace helpers;

use \Slim\Slim;
use \api\Controller\ConfigController;

class Site
{

    static function name()
    {
        global $app;
        return '';
    }
    static function logo()
    {
        return '';
    }
    static function description()
    {
        return '';
    }

    static function charset()
    {
        global $app;
        return $app->config('site')->charset;
    }

    static function language_attr()
    {
        return '';
    }




}
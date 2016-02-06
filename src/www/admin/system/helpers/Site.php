<?php

/**
 * Helper for site specific configuration and methods
 */

namespace helpers;

use \Slim\Slim;
use \helpers\Location;
use \api\Controller\ConfigController;

class Site
{

    static function name()
    {
        global $app;
        return $app->config('site')->name;
    }
    static function logo()
    {
        global $app;
        return Location::uri($app->config('site')->logo);
    }
    static function description()
    {
        global $app;
        return $app->config('site')->description;
    }

    static function charset()
    {
        global $app;
        return $app->config('site')->charset;
    }

    static function language_attr()
    {
        global $app;
        return $app->config('site')->language_attr;
    }




}
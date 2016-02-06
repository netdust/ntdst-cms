<?php

/**
 * Helper for site location configuration and methods
 */

namespace helpers;

use \Slim\Slim;
use \api\Controller\PageController;

class Location
{

    public static function url() {
        $app = \Slim\Slim::getInstance();
        return  $app->request->getUrl();
    }

    public static function host() {
        $app = \Slim\Slim::getInstance();
        return  $app->request->getHost();
    }

    public static function root() {
        $app = \Slim\Slim::getInstance();
        return  $app->request->getRootUri();
    }

    public static function path() {
        $app = \Slim\Slim::getInstance();
        return  $app->request->getPath();
    }



    public static function asset($item) {
        return  self::to( 'public/data/upload/' . $item );
    }

    public static function img($item) {
        return  self::_path('img',$item);
    }

    public static function css($item) {
        return  self::_path('css',$item);
    }

    public static function js($item) {
        return  self::_path('js',$item);
    }

    protected  static function _path($asset, $item) {
        $app = \Slim\Slim::getInstance();
        return  self::to( 'public/themes/' . $app->config('theme')->theme. '/'.  $asset. '/' . $item );
    }

    public static function to($uri) {
        if(strpos($uri, '://')) return $uri;
        $app = \Slim\Slim::getInstance();
        $base = $app->request()->getRootUri();
        return $base. '/' . ltrim($uri, '/');
    }

    public static function uri($uri) {
        if(strpos($uri, '://')) return $uri;
        $app = \Slim\Slim::getInstance();
        return $app->request()->getUrl(). '/' . self::to($uri);
    }

}
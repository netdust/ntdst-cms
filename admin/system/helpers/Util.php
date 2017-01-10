<?php

namespace helpers;


class Util {

    #helpers
    public static function hook($h) {
        $app = \Slim\Slim::getInstance();
        $app->applyHook($h);
    }

    public static function config($c) {
        $app = \Slim\Slim::getInstance();
        echo $app->config($c);
    }

    public static function i18n($key=null) {

    }

    #page(s)
    public static function sort_pages( &$pages, $field, $order='ASC' ) {
        usort( $pages, self::build_sorter($field, $order) );
    }

    protected  static function build_sorter($key, $order) {
        return function ($a, $b) use ($key, $order) {
            return $order=='ASC'
                ? strnatcmp($a->{$key}, $b->{$key})
                : strnatcmp($b->{$key}, $a->{$key});
        };
    }


    /**
     * shortcode
     *
     */

    public static function register_shortcode( $name, $callback ) {
        return \helpers\Shortcode::get()->register( $name, $callback );
    }

    public static function unregister_shortcode( $name, $callback ) {
        return \helpers\Shortcode::get()->unregister( $name );
    }

    public static function parse_shortcode( $str ) {
        return \helpers\Shortcode::get()->parse( $str );
    }

    /**
     * Echoing json response to client
     * @param String $status_code Http response code
     * @param Int $response Json response
     */
    public static function echo_json($response, $status_code=200) {
        $app = \Slim\Slim::getInstance();
        // Http response code
        $app->status($status_code);
        // setting response content type to json
        $app->contentType('application/json');
        echo ($response);
        exit();
    }


    /**
     * Validating email address
     */
    public static function validateEmail($email) {
        $app = \Slim\Slim::getInstance();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response["error"] = true;
            $response["message"] = 'Email address is not valid';
            self::echo_json(400, $response);
            $app->stop();
        }
    }


    public static function key_exists($source, $key) {
        return isset($source[$key]) || array_key_exists($key, $source);
    }

    public static function get($source, $key, $default) {
        return self::key_exists($source, $key) ? $source[$key] : $default;
    }


}

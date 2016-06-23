<?php


include_once( dirname(__FILE__) . '/admin/system/bootstrap.php');

require( dirname(__FILE__). '/admin/system/api/Routes/Admin.php');
require( dirname(__FILE__). '/admin/system/api/Routes/Api.php');


# -----------------------------------------------
$iscms = (bool)preg_match('|/cms.*$|', $_SERVER['REQUEST_URI']);
$isapi = (bool)preg_match('|/api/v.*$|', $_SERVER['REQUEST_URI']);
if (!$iscms && !$isapi) {

    $app->add(new \api\Routes\catchRoute()); // catch final request and serve template

    $app->add(new \api\Middleware\I18n(
        array(
            'fr' => 'Français',
            'nl' => 'Nederlands'
        )));

    if( $app->getMode()=="development" ) {
        $debugbar = new \Slim\Middleware\DebugBar();
        $app->add($debugbar);
    }
}

$app->run();

<?php

define('DS', DIRECTORY_SEPARATOR);
define('ENV', getenv('APP_ENV'));
define('VERSION', 'v1');
define('EXT', '.php');

//define('__ROOT__', dirname( dirname(__FILE__) ) . DS );

define('__ROOT__', '.' . DS  );
define('__ADMIN__', dirname( dirname( __FILE__ ) ) . DS. 'front' . DS  );


@session_start();

// Autoloader
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Config
require_once dirname(__FILE__) . '/config.php';

// Debug
require_once dirname(__FILE__) . '/debug.php';


// Models
require_all(  dirname( __FILE__ ).'/api/Includes' );
require_all(  dirname( __FILE__ ).'/api/Model' );
require_all(  dirname( __FILE__ ).'/services' );
require_all(  dirname( __FILE__ ).'/helpers' );

# add Configuration

// Create Application
$app = new \api\App($config['app']);


// Only invoked if mode is "api"
$app->configureMode('api', function () use ($app) {
    $app->config(array(
        'view'=> new api\View\JsonApiView(),
        'log.enable' => true,
        'log.level' => \Slim\Log::DEBUG,
        'debug' => false
    ));
});

// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'base'=> $app->request->getScriptName(),
        'log.enable' => true,
        'log.level' => \Slim\Log::WARN,
        'debug' => false
    ));
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'base'=> dirname($app->request->getScriptName()).'/www',
        'log.enable' => true,
        'log.level' => \Slim\Log::DEBUG,
        'debug' => true
    ));
});

// Init database
try {
    if (!empty($config['db']['username'])) {
        \Model::$auto_prefix_models = '\\'.$config['db']['prefix'].'\\';
        \ORM::configure($config['db']['dsn']);
        \ORM::configure('username', $config['db']['username']);
        \ORM::configure('password', $config['db']['password']);
        ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
} catch (\PDOException $e) {
    $app->getLog()->error($e->getMessage());
}

// load configuration
try {
      $app->config($config);
      $themeconfigcontroller = new \api\Controller\ConfigController();
      $themeconfig = (array) $app->config('site');
} catch (\PDOException $e) {
      $app->getLog()->error($e->getMessage());
}

// Plugins
try {
    $controller = new \api\Controller\PluginController();
} catch (\PDOException $e) {
    $app->getLog()->error($e->getMessage());
}

// setup frontend template engine
$view = $app->view();
$view->parserDirectory = dirname( __FILE__ ).'/vendor/Twig';
$view->twigTemplateDirs = array(
    __ADMIN__ .'tpl'.DS,
    __ROOT__ .'public/themes/'.$themeconfig['theme'].DS
);
$view->parserOptions = array(
    'debug' => HTML5_DEBUG,
    'cache' => __ROOT__.'public/data/cache'
);

if( !$app->isAPI() ) {

    // Init themes and function
    $view->parserExtensions = array(
        new \api\Extensions\ApiHelpers(),
        new \api\Extensions\ShareHelpers(),
        new \Aptoma\Twig\Extension\MarkdownExtension(new \Aptoma\Twig\Extension\MarkdownEngine\MichelfMarkdownEngine()),
    );


    try {
        if (is_readable($path = __ROOT__ . 'public/themes/' . $themeconfig['theme'] . DS . 'functions.php')) {
            require $path;
        }
    } catch (\PDOException $e) {
        $app->getLog()->error($e->getMessage());
    }


    $app->hook('slim.before.dispatch', function () use ($app) {

        $iscms = (bool)preg_match('|/cms.*$|', $_SERVER['REQUEST_URI']);

        if (!$iscms) {

            $templateData = (object)array(
                'lang' => $app->config('language'),
                'get' => $_GET,
                'post' => $_POST,
                'cookie' => $_COOKIE,
                'session' => $_SESSION,
                'production' => !HTML5_DEBUG
            );

            $app->applyHook('data', $templateData);
            $app->view()->appendData((array)$templateData);


            $app->applyHook('before.page');

            $resource = ltrim($app->request()->getResourceUri(), '/');
            $param = explode('/', $resource);

            // get Page
            $home = \api\Controller\PageController::getPage($app->config('site')->home)->slug;
            $uri = $param[0] != '' ? $param : explode('/', $home);

            $app->page = \api\Controller\PageController::slug($uri);

            $app->applyHook('after.page');
        }
    });

}


function require_all($mod) {
    $fi = new FilesystemIterator($mod, FilesystemIterator::SKIP_DOTS);
    foreach($fi as $file) {
        if($file->isFile() and $file->isReadable() and '.' . $file->getExtension() == EXT) {
            require $file->getPathname();
        }
    }
}

class ResourceNotFoundException extends \RuntimeException{}

class FileUploadException extends \Exception{}

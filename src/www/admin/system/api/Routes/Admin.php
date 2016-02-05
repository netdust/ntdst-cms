<?php

# middleware
$app->add( new \api\Middleware\CsrfGuard() );

$app->group(

    '/api/v1/auth',

    function () use ($app) {

        $app->get('/', function () use ($app) {
            $auth = new \services\Authentication();
            if( $user = $auth->authenticate() )  {
                $app->render( 200, array( 'user'=>$user ) );
            }else
                $app->render( 401, array( 'error'=> 'no valid login' ) );
        });

        $app->post('/login', function () use ($app) {

            $param = (array) json_decode($app->request()->getBody());
            $auth = new \services\Authentication($param['email'], $param['password'], (boolean) $param['remember'] );

            try {
                $user = $auth->login( );
                $app->render( 200, array( 'user'=>$user ) );

            } catch( \services\AuthenticationException $e ) {
                $app->render( 401, array( 'error'=> $e->getMessage() ) );
            }

        });

        $app->post('/logout', function () use( $app ) {
            $auth = new \services\Authentication();
            $auth->logout();
            $app->redirect($app->request->getRootUri());
        });

        $app->post('/recover', function () use( $app ) {
            $param = (array) json_decode($app->request()->getBody());
            $auth = new \services\Authentication($param['email']);

            try {
                $auth->fogottenPassword( );
                $app->render( 200, array( 'user'=>'' ) );

            } catch( \services\AuthenticationException $e ) {
                $app->render( 200, array( 'error'=>1, 'message'=>$e->getMessage() ) );
            }
        });

        $app->post('/signup', function () use ($app) {

            $param = (array) json_decode($app->request()->getBody());
            $auth = new \services\Authentication($param['email'], $param['password']);

            if(!$auth->createUser($param['first_name'], $param['last_name'], $param['company'], $param['phone'], $param['group'])){
                $app->render( 401, array( 'error'=>$auth->getError() ) );
            }

            $app->render( 200, array( 'success'=>'user signed up' ) );
        });

        $app->post('/remove', function () {
            echo 'welcome to this api';
        });
    }

);
$app->group(
    '/cms',
    function () use ($app) {

        $app->get('(/)(:slug+)', function( $p=array() ) use ($app)
        {
            $settings = array_merge( array(
                "api"=>$app->request->getRootUri().'/api/'.VERSION.'/',
                "root"=>$app->request->getRootUri().'/cms',
                "home"=>'pages'
            ), (array) $app->config('theme') );

            $modules = array(
                array( "id"=>1, "name"=>"Pages", "icon"=>"file-o", "path"=>"page" ),
                array( "id"=>2, "name"=>"Collections", "icon"=>"picture-o", "path"=>"collection"),
                array( "id"=>3, "name"=>"Assets", "icon"=>"image", "path"=>"asset"),
                array( "id"=>4, "name"=>"Users", "icon"=>"users", "path"=>"user"),
                array( "id"=>5, "name"=>"Settings", "icon"=>"cog", "path"=>"setting", "data"=> (array) $app->config('theme') ),
                array( "id"=>6, "name"=>"Help", "icon"=>"question", "path"=>"help")
            );

            $args = (object) array( 'settings'=>$settings, 'modules'=>$modules);
            $app->applyHook('admin.before.render', $args );

            $app->render( 'index.php', array(
                "base"=> $app->config('base'),
                "settings"=>json_encode( (array) $args->settings ),
                "modules"=> json_encode( (array) $args->modules )
            ));


        } );

    });
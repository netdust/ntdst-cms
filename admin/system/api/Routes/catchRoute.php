<?php
namespace api\Routes;

class catchRoute extends \Slim\Middleware
{
    public function __construct(){ }
    public function call()
    {
        $this->app->get('/(:slug+)', function ($slug = '') {

            if( $this->app->page == null ) $this->app->notFound();
            else render(locate_template());
        });

        $this->next->call();
    }
}
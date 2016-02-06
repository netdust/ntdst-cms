<?php

namespace api\Controller;

class JsonController extends \api\Controller\Controller
{

    public $key = '';
    public $data_array = array();
    protected $file = "public/data/admin.json";

    public function __construct()
    {
        $this->app = \Slim\Slim::getInstance();
    }

    public function get( $id=0, $type='page', $param=array() )
    {
        $this->render( 200, $this->data_array );
    }

    public function post( )
    {
        $request = (array) json_decode($this->app->request()->getBody());

        if( isset( $request['id'] ) ) {
            $m = $this->search( 'id', $request['id'] );
            if( count($m)>0 ) {
                $this->put_data( $m, $request );
            }
        }
        else
            $this->post_data( $request );
    }

    public function put( $id  )
    {
        $this->post( );
    }

    protected function init_data( $key='' ) {
        $this->load();
        $this->key = $key;
        $this->data_array = (array) $this->app->config('site')->{$this->key};
    }

    protected function post_data( $data ) {
        $this->data_array = (array) $data;
        $this->save();
    }

    protected function put_data( $model, $data ) {
        $this->data_array = array_replace( $this->data_array, array( max(array_keys($model)) => (object) $data ));
        $this->save();
    }

    protected function load( ) {
        $json = file_get_contents(__ROOT__.$this->file);
        $this->app->config('site', json_decode($json));
    }

    protected function save( ) {
        if( $this->key != '' ) {
            $this->app->config('site')->{$this->key} = (array) $this->data_array;
        }
        else {
            $this->app->config('site', $this->data_array );
        }
        file_put_contents(__ROOT__.$this->file, json_encode($this->app->config('site')));
        $this->render( 200, (array) json_decode($this->app->request()->getBody()) );
    }

    protected function search( $key, $value, $index=false ) {
        $results = array_filter( $this->data_array, function($item) use ( $key, $value ){
            return $item->{$key} == $value;
        } );
        return $index ? array_values($results) : $results;
    }

}
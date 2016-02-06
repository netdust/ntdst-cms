<?php

namespace api\Controller;

class PluginController extends \api\Controller\JsonController
{


    protected $is_dirty=false;

    public function __construct( ) {
        $this->app = \Slim\Slim::getInstance();
        $this->init_data('plugins');
    }

    public function init_data( $key='' )
    {
        parent::init_data( $key );
        $this->find_plugins();

        if( $this->is_dirty ) {
            $this->is_dirty=false;
            $this->app->config('site')->{$this->key} = (array) $this->data_array;
            file_put_contents(__ROOT__.$this->file, json_encode($this->app->config('site')));
        }

        foreach($this->data_array as $pl) {
            if( isset( $pl->installed ) && $pl->installed ) {
                $class= $pl->namespace.'\Plugin';
                if( !$this->app->container->has( $pl->namespace ) ) {
                    $this->app->add( new $class( $pl ) );
                }
            }
        }
    }


    public function find_plugins() {

        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(__ROOT__.'public/plugins')) as $filename)
        {
            if($filename->isFile() and $filename->isReadable() and '.' . $filename->getExtension() == EXT) {

                $nm = require_once $filename->getPathname();
                $ar = explode( '\\', $nm );
                $end = end( $ar );

                $defaults =  array(
                    'id' => count($this->data_array)+1,
                    'label' => $end,
                    'namespace' => $nm,
                    'installed' => 0,
                );

                $settings = $this->search( 'label', $end);
                if( count($settings) == 0 && is_string( $nm ) ) {
                    $this->data_array[] = (object) $defaults;
                    $this->is_dirty = true;
                }

            }

        }

    }


}
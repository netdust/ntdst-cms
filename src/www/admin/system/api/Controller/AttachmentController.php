<?php

namespace api\Controller;

class AttachmentController extends \api\Controller\PageController
{

    protected function _get( $id, $type='page', $param=array()  ) // returns array
    {
        return parent::_get( $id, 'attachment', array('state'=>'inherit')  );
    }

    public function delete( $id )
    {
        $this->app->applyHook( 'page.delete', $id );
        $r = self::getPage( $id );

        $image = $r->template;
        if (file_exists($image)) {
            unlink($image);
        }

        // delete from DB, no restore
        $metas = $r->metas()->find_many();
        foreach( $metas as $meta ) {
            $meta->translations()->delete_many();
        }
        $r->metas()->delete_many();
        $r->delete();

        $this->render( 200, array( 'success'=>$r ) );
    }
}
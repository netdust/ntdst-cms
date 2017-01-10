<?php

namespace helpers;

class Session
{
    public function __construct()
    {
        // Set handler to overide SESSION
        session_set_save_handler(
            array($this, "_open"),
            array($this, "_close"),
            array($this, "_read"),
            array($this, "_write"),
            array($this, "_destroy"),
            array($this, "_gc")
        );

        // Start the session
        session_start();
    }

    /**
     * Open
     */
    public function _open(){

        // Return False
        return true;
    }

    /**
     * Close
     */
    public function _close(){

        if (\ORM::for_table('cms_session')->is_dirty('data')) {
            // perform garbage collection
            $result = $this->_gc(ini_get('session.gc_maxlifetime'));
            return $result;
        } // if

        return FALSE;
    }

    /**
     * Read
     */
    public function _read($id){
        // Set query
        $r = \ORM::for_table('cms_session')->where('id',$id);

        // Attempt execution
        // If successful
        if($r->count()>0){
            // Return the data
            return $r->find_one()->data;
        }else{
            // Return an empty string
            return '';
        }

    }

    /**
     * Write
     */
    public function _write($id, $data){

        // Create time stamp
        $data = array(
            'id'=>$id,
            'data'=>$data
        );

        // Set query
        $r = \ORM::for_table('cms_session');
        if( $r->where('id',$id)->count() == 0 ) {
            @ $details = file_get_contents("http://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/json");
            $data['details'] = $details;

            $r = $r->create($data);
            $r->set_expr('create', 'NOW()');
            $r->set_expr('access', 'NOW()');
        }
        else {
            $r = $r->where('id',$id)->find_one();
            $r->set_expr('access', 'NOW()');
            foreach( $data as $key => $val ) {
                $r->{$key} = $val;
            }
        }

        $r->save();
        return true;
    }

    /**
     * Destroy
     */
    public function _destroy($id){
        // Set query
        $r = \ORM::for_table('cms_session')->where('id',$id)->find_one();
        // Attempt execution
        // If successful
        if($r->delete()){
            // Return True
            return true;
        }

        // Return False
        return false;
    }

    /**
     * Garbage Collection
     */
    public function _gc($max){
        // Calculate what is to be deemed old
        $date = date('Y-m-d H:i:s', strtotime("now-$max"));

        // Set query
        $r = \ORM::for_table('cms_session')->where_lt('access',$date)->find_many();

        // Attempt execution
        if($r->delete()){
            // Return True
            return true;
        }

        // Return False
        return false;
    }


}

<?php

/**
 * This is model for airports, but with hard-code data.
 *
 * @author Morris Arroyo
 */
class Airport extends CI_Model
{
    var $data = array(
         '0' => array('code' => 'YXT', 'type' => 'base', 'name' => 'base' )
        ,'1' => array('code' => 'YXT', 'type' => 'dest', 'name' => 'dest1' )
        ,'2' => array('code' => 'YXT', 'type' => 'dest', 'name' => 'dest2' )
        ,'3' => array('code' => 'YXT', 'type' => 'dest', 'name' => 'dest3' )
//            'base' => array()
    );

    // Constructor
    public function __construct()
    {
        parent::__construct();

        foreach ($this->data as $key => $record)
        {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }
    }

    // Retrieve a single airport, null if not found
    public function get($which)
    {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    //Retrieve all of the airports
    public function all()
    {
        return $this->data;
    }
}
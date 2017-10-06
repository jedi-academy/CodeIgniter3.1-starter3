<?php

/**
 * This is model for airports, but with hard-code data.
 *
 * @author Morris Arroyo
 */
class Airport extends CI_Model
{
    var $data = array(
         '0' => array('code' => 'YXT', 'type' => 'base'
                     ,'name' => 'Northwest Regional Airport Terrace-Kitimat (Terrace Airport)' )
        ,'1' => array('code' => 'XQU', 'type' => 'dest', 'name' => "Qualicum Beach Airport" )
        ,'2' => array('code' => 'YYD', 'type' => 'dest', 'name' => "Smithers Airport")
        ,'3' => array('code' => 'ZST', 'type' => 'dest', 'name' => "Stewart Aerodrome")
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
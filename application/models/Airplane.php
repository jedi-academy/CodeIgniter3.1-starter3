<?php

/**
 * This is the model for the airplanes in the fleet, but with hard-coded data.
 *
 * @author Morris Arroyo
 */
class Airplane extends CI_Model
{

    var $data = array(
        '0' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
        '1' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
        '2' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
        '3' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
        '4' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
        '5' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
        '6' => array('manufacturer' => "Beechcraft", "model" => "Baron", "price" => "1350"
        , "seats" => "4", "reach" => "1948", "cruise" => "373", "takeoff" => "701"
        , "hourly" => "340"
        ),
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

    // Retrieve a single airplane, null if not found
    public function get($which)
    {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    //Retrieve all of the airplanes
    public function all()
    {
        return $this->data;
    }

}
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        parent::__construct();
    }


    public function index()
	{
	    $airplanes = $this->airplane->all();
	    $base = array(0 => $this->airport->get(0));
	    $all_airports = $this->airport->all();
	    $dest = array();
	    foreach ($all_airports as $airport) {
            if (strcmp($airport['type'],  'dest') == 0) {
                array_push($dest,$airport);
            }
        }
		$this->data['pagebody'] = 'welcome_message';
        $this->data['base'] = $base;
        $this->data['dest'] = $dest;
        $this->data['count'] = count($airplanes);

		$this->render();
	}

}

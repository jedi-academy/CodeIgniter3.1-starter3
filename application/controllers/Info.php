<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller
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
	public function index()
	{
		$record = $this->airport;
        header("Content-type: application/json");
        echo json_encode($record, JSON_PRETTY_PRINT);
	}

	public function fleet() {

        $record = $this->airplane;
        header("Content-type: application/json");
        echo json_encode($record, JSON_PRETTY_PRINT);
	}
	
	public function flights() {
		$record = $this->flight;
		header("Content-type: application/json");
		echo json_encode($record, JSON_PRETTY_PRINT);
	}

}

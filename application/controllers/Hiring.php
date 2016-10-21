<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends Application
{
    function __construct(){
        parent::__construct();
    }
	/**
	 * Hiring Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/hiring
	 */
	public function index() {
        $stuff = file_get_contents('../data/jobs.md');
		$htmlstuff = $this->parsedown->parse($stuff);
		$this->data['content'] = $this->parser->parseString($htmlstuff,$parameters,true);
		$this->render('template-secondary');
	}
}

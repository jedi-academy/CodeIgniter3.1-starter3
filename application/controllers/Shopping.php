<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends Application
{
    function __construct(){
        parent::__construct();
    }
	/**
	 * Shopping Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/shopping
	 */
	public function index() {
        // pictorial menu
        $count = 1;
        foreach ($this->categories->all() as $category) {
            $chunk = 'category' . $count; 
            $this->data[$chunk] = $category->name;
            $count++;
        }
        $this->render('template-shopping');  
	}
}

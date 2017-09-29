<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Welcome class is a default controller in a subfolder (bravo).  
 * The target link is handled by a conventional controller
 * ie. controllers/bravo/Welcome::index()
 * 
 * It inherits the Application class and uses the inherited show method
 * with a value of 2.  
 * 
 *  * @author steve
 * 
 */
class Welcome extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
            $this->show(2);
	}

}

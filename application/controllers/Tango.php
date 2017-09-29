<?php

/**
 * Tango class remapping of Foxtrot.
 * The target link is handled by a conventional controller
 * ie. controllers/Tango::index()
 *
 * It inherits the Application class and uses the inherited show method
 * with a value of 5.  
 * 
 *  * @author steve
 */
class Tango extends Application
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
            $this->show(5);
	}

}

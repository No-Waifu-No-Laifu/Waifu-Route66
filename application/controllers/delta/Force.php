<?php

/**
 * Force class is a controller in a sub-folder (delta).
 * The target link is handled by a conventional controller
 * ie. controllers/delta/Force::index()
 *
 * It inherits the Application class and uses the inherited show method
 * with a value of 4.  
 * 
 *  * @author steve
 */
class Force extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
            $this->show(4);
	}

}
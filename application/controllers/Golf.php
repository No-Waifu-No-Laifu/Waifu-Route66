<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *  This will be a routing managed with a rule
 *  Make the target link /i/need/a/hobby
 *
 *  Add a routing rule to config/routes.php, which remaps any request with the first segment "i" to the Golf controller
 *
 *  $route['i/(:any)'] = 'golf';
 *
 *  This will be handled by controllers/Golf::index()
 *  The body of that method should invoke the inherited show method, with the key "6"
 *
 * @author namblue
 */
class Golf extends Application
{
    public function index() 
    {
        $this->show(6);
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juliet.  It is a service controller that returns JSON data
 * instead of an HTML page.  
 *
 * @author steve
 */
class Juliet extends CI_Controller{
    
    function __construct()
    {
        parent::__construct();
    }
    
    public function index (){
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}
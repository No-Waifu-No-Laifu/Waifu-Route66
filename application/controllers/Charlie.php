<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *  This will be a controller found by convention
 *  Make the target link /charlie/brown
 *  We want this handled by a subcontroller, i.e. controllers/Charlie::brown()
 *  The body of that method should invoke the inherited show method, with the key "3"
 *
 * @author namblue
 */
class Charlie extends Application
{
    public function brown() 
    {
        $this->show(3);
    }
}

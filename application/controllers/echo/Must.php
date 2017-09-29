<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 
 *  This will be a controller found by convention
 *  Make the target link /echo/must/wehave
 *  We want this handled by a conventional controller, i.e. controllers/echo/Must::wehave()
 *  The body of that method should invoke the inherited show method, with the key "5"
 *
 * @author namblue
 */
class Must extends Application
{
    public function wehave() 
    {
        $this->show(5);
    }
}

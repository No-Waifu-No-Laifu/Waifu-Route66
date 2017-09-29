<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 
 *This will be a controller found by convention, but with an unexpected result
 *Make the target link /india
 *We want to return an image, instead of an HTML page
 *Make a data folder inside your project root (so, not inside public). Copy an image there.
 *The controller should extend CI_Controller, and not Application
 *
 *The handling should explicitly set the returned content type, and then copy the contents of an image file
 */

// The following should be a relative link to your image file above
$source = '../data/Tewi.ico'; 
// note that we could have referenced an image anywhere on our system

// set the mime type for that image (jpeg, png, etc)
header("Content-type: image/x-icon"); 
header('Content-Disposition: inline');
readfile($source); // dish it
?>

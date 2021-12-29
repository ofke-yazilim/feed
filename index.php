<?php
use App\Request;
use App\Response;
use App\View;
use App\Factory\PlatformFactory;
require_once 'autoload.php';

/**
 * Geting Request data
 *
 * http://okesmez.com/feed?platform=facebook&format=json&model=product
 */
Request::capture();

// Calling factory class
$factory    = new PlatformFactory();
$view       = new View($factory->products());
(new Response($view))->setContent();




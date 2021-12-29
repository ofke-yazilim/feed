<?php
use App\Request;
use App\Response;
use App\View;
use App\Factory\PlatformFactory;
require_once 'autoload.php';

/**
 * Geting Request data
 *
 * Facebook XML  : http://case.okesmez.com/api/v1/products/facebook/xml
 * Facebook JSON : http://case.okesmez.com/api/v1/products/facebook/json
 * Twitter XML   : http://case.okesmez.com/api/v1/products/twitter/xml
 * Twitter JSON  : http://case.okesmez.com/api/v1/products/twitter/json
 * http://feed.okesmez.com/?platform=facebook&format=json
 */
Request::capture();

// Calling factory class
$factory    = new PlatformFactory();
$view       = new View($factory->products());
(new Response($view))->setContent();




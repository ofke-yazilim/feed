<?php
use App\Request;
use App\Factory\PlatformFactory;
require_once 'autoload.php';

/**
 * Geting Request data
 *
 * http://okesmez.com/feed?platform=facebook&format=json&model=product
 */
Request::capture();

// Calling factory class
$f = new PlatformFactory();
print_r($f->products());


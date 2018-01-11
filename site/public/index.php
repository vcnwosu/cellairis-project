<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use com\vnwosu\cellairis as Cellairis;

require_once dirname(__FILE__, 2) . '/serv/init.php';

new class {

    $routes = [
        '/' => 'landing-page.php'
    ];

    public function __construct() {



    }

}

?>

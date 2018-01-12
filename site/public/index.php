<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use com\vnwosu\cellairis as Cellairis;

require_once dirname(__FILE__, 2) . '/serv/init.php';

new class {

    public function __construct() {

        // get the request
        $req = $_GET['request'] ?? '/';

        // set up the resource (either request exists or error page)
        $resource = Cellairis\ROUTES[$req] ?? Cellairis\ERROR404;

        // access it
        require_once $resource;

    }

}

?>

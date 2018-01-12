<?php

namespace com\vnwosu\cellairis;

// constants to model directory structure
define('com\vnwosu\cellairis\SERV', dirname(__FILE__) . '/');
define('com\vnwosu\cellairis\CTRL', SERV . 'controllers/');
define('com\vnwosu\cellairis\VIEW', SERV . 'views/');
define('com\vnwosu\cellairis\MODL', SERV . 'models/');
define('com\vnwosu\cellairis\TMPL', SERV . 'templates/');

// page request error
define('com\vnwosu\cellairis\ERROR404', CTRL . 'error404.php');

// routes
define('com\vnwosu\cellairis\ROUTES', [
    '/' => CTRL . 'landing-page.php'
]);

// includes
require_once 'core/functions.php';
require_once 'core/View.class.php';

?>

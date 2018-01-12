<?php

namespace com\vnwosu\cellairis;

new class {

    public function __construct() {

        // reference functions.php
        $_ = 'create_ul';

        // navigation can be made to dynamically change
        // depending on the client accessing the site at
        // the time, so a model to handle that state
        require_once MODL . 'navigation.php';

        require_once VIEW . 'landing-page.php';

    }

}

?>

<?php

namespace com\vnwosu\cellairis;

new class extends View {

    public $title = 'Page Not Found';

    public function __construct() {
        parent::__construct();

        // echo HTML to browser
        $this->html();
    }

};

?>

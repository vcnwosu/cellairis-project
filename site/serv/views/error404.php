<?php

namespace com\vnwosu\cellairis;

new class extends View {

    public $title = 'Page Not Found';
    public $styles = [
        'landing-page.css' // reuse stuff
    ];

    public function __construct() {
        parent::__construct();

        // not processing anything major
        // so just show the error page
        require_once TMPL . 'error404.php';
        $this->main = $error404;

        // echo HTML to browser
        $this->html();
    }

};

?>

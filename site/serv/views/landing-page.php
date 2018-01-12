<?php

namespace com\vnwosu\cellairis;

new class extends View {

    public $styles = ['landing-page.css'];

    public function __construct() {
        parent::__construct();

        // call for the landing page
        $this->landing_page();

        // echo HTML to browser
        $this->html();
    }

    private function landing_page() {
        require_once TMPL . 'landing-page.php';

        // since it's only just one static page and
        // no other HTML content is being generated
        // just assign to main
        $this->main = $landing_page;
    }

};

?>

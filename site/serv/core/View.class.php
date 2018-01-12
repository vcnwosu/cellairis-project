<?php

namespace com\vnwosu\cellairis;

// model includes for base View
require_once MODL . 'navigation.php';

class View {

    public $header = NULL;
    public $footer = NULL;
    public $body = NULL;

    public function __construct() {
        /* site-wide values
         */
        $title = $this->title ?? 'Home'; // page title for different views

        /* run/query models as needed
         */
        $nav = (new Navigation)->nav; // client-specific site navigation

        // site-wide header and footer
        require_once TMPL . 'header.php';
        require_once TMPL . 'footer.php';

        $this->header = $header;
        $this->footer = $footer;
    }

    public function html() {
        echo "{$this->header}{$this->body}{$this->footer}";
    }

}

?>

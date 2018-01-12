<?php

namespace com\vnwosu\cellairis;

class View {

    public function __construct() {}

    public static function html() {
        require_once TMPL . 'header.php';
        require_once TMPL . 'footer.php';

        echo "{$header}{BODY}{$footer}";
    }

}

?>

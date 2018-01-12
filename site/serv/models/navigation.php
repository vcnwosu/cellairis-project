<?php

namespace com\vnwosu\cellairis;

class Navigation {

    public $nav = [
        'PRODUCTS' => '#',
        'REPAIRS' => '#',
        'SHOP' => '#',
        'ABOUT CELLAIRIS' => '#',
        'CONTACT' => '#'
    ];

    public function __construct() {
        /* could be used in the future to query
         * DB for current client privileges and
         * dynamically add to or remove from the
         * navigation menu
         */
    }

}


?>

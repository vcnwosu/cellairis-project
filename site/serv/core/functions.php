<?php

namespace com\vnwosu\cellairis\functions;

/* create_ul
 * dynamically create unordered list
 *
 * params:
 *    $list: array
 *    $anchor: boolean; default FALSE
 *
 * returns: HTML unorderd list : string
 */
function create_ul($list, $anchor = FALSE): string {

    $ul = '<ul>';

    foreach($list as $k => $v) {
        $ul .= '<li>';
        $ul .= ($anchor) ? $a = '<a href="' . $v . '">' . $k . '</a>' : $k;
        $ul .= '</li>';
    }

    $ul .= '</ul>';

    return $ul;
}

?>

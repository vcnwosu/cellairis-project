<?php

namespace com\vnwosu\cellairis\functions;

/* create_ul
 * params:
 *    $list: array
 *    $anchor: boolean; default FALSE
 *
 * dynamically create unordered list
 * if $anchor is set to TRUE, then a list of key => value
 * pairs is a expected in the form of ANCHOR_TEXT => ANCHOR_HREF
 * ex. [
 *       'Contact' => '/contact-us',
 *       'My Membership' => '/accounts'
 *     ];
 *
 * returns: HTML unorderd list : string
 */
function create_ul($list, $anchor = FALSE): string {

    $ul = '<ul>';

    foreach($list as $k => $v) {
        $ul .= '<li>';
        $ul .= ($anchor) ? $a = '<a href="' . $v . '">' . $k . '</a>' : $v;
        $ul .= '</li>';
    }

    $ul .= '</ul>';

    return $ul;
}

?>

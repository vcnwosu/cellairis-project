<?php

namespace com\vnwosu\cellairis\functions;

/* generate_html
 * params:
 *    $elem: string
 *    $list: array
 *
 * dynamically generate HTML from a list
 * currently supports: 'nav', 'scripts', 'styles'
 *
 * returns: HTML: string
 */
function generate_html(string $elem, array $list): string {

    $el = [
        'nav' => 'ul',
        'scripts' => 'script',
    ];

    $html = isset($el[$elem]) ? "<{$el[$elem]}>" : '';

    foreach($list as $k => $v) {

        switch($elem) {
            case 'nav':
                $html .= "<li><a href=\"{$v}\">{$k}</a></li>";
                break;
            case 'scripts':
                $html .= "<script src=\"js/{$v}\"></script>";
                break;
            case 'styles':
                $html .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/{$v}\"/>";
                break;
        }

    }

    $html .= isset($el[$elem]) ? "</{$el[$elem]}>" : '';

    return $html;

}

?>

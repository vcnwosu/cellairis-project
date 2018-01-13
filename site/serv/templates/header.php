<?php

namespace com\vnwosu\cellairis;

$__html = FUNC . '\generate_html';

$header = <<<HEADER
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Cellairis&reg; | {$title}</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    {$__html('styles', $styles)}
    <script src="js/script.js" defer></script>
  </head>
  <body>
    <header>
      <div class="thm-orng-wht">
        CELLAIRIS<span>&reg;</span>
      </div>
      <nav class="cell-hide">
        {$__html('nav', $nav)}
      </nav>
      <div id="hmbg">
        <span></span>
      </div>
    </header>
HEADER;

?>

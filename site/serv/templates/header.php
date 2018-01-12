<?php

namespace com\vnwosu\cellairis;

$_ = FUNC . '\create_ul';

$header = <<<HEADER
<!DOCTYPE html>
<html>
  <head>
    <title>Cellairis&reg; | {$title}</title>
  </head>
  <body>
    <header>
      <div>
        CELLAIRIS&reg;
      </div>
      <nav>
        {$_($nav, TRUE)}
      </nav>
      <div id="hmbg">
        <span></span>
      </div>
    </header>
HEADER;

?>

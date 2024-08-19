<?php
require_once("lessc.inc.php");

$less = new lessc;

$compileFrom = "main.less";
$compileTo = "main.css";

file_put_contents($compileTo, $less->compileFile($compileFrom));

echo('<link rel="stylesheet" type="text/css" href="main.css">');
?>

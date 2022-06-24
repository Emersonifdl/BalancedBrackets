<?php
require_once('Brackets.php');

$b1 = new Brackets('(){}[]');
$b2 = new Brackets('[{()}](){}');
$b3 = new Brackets('[]{()');
$b4 = new Brackets('[{)]');

var_dump(
    $b1->isBalanced(),
    $b2->isBalanced(),
    $b3->isBalanced(),
    $b4->isBalanced()
);

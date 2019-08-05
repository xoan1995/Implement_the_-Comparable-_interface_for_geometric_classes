<?php
include "CircleComparator.php";

$circleOne = new Circles( 4,'ht1');
$circleTwo = new Circles( 4,'ht2');
$circleComparator = new CircleComparator();
echo($circleComparator->compare($circleOne, $circleTwo));

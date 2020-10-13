<?php
include_once "ComparableCircle.php";
$circleOne=new ComparableCircle("Circle1",8);
$circleTwo=new ComparableCircle("Circle2",50);
print_r($circleOne->compareTo($circleTwo));
<?php
$a = new ArrayIterator(array(1,3,5));
$b = new ArrayIterator(array(2,4,6));

$it = new AppendIterator();
$it->append($a);
$it->append($b);

foreach($it as $k => $v){
    echo $k.'  :  '.$v.PHP_EOL;
}
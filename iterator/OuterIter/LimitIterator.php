<?php
$arr = array(1,2,3,4,5,6);
$it = new arrayIterator($arr);
$LimitIt = new LimitIterator($it ,2, 4);
foreach($LimitIt as $v){
    echo $v;
}
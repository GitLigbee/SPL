<?php
//Fast In Last Out : FILO
$obj = new SPLStack();

$obj->push('a');
$obj->push('b');
$obj->push('c');
$obj->push('d');
$obj->pop();
//在堆栈里面 0->top 
$obj->offsetSet(0,'A');
echo $obj->key();
print_r($obj);
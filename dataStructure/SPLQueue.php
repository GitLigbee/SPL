<?php
$obj = new SplQueue();

$obj->enqueue('a');
$obj->enqueue('b');

echo $obj->dequeue();
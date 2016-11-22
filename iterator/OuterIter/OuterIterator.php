<?php
class Outer extends IteratorIterator
{
    public function current()
    {
        return 'current: '.parent::current();
    }
    public function key()
    {
        return 'key: '.parent::key();
    }
}

$arr = array('a','b','c');
$obj = new Outer(new ArrayIterator($arr));

foreach($obj as $k=>$v){
    echo $k.'--'.$v.PHP_EOL;
}
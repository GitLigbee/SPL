<?php
$id = new ArrayIterator(array(1,2,3));
$name = new ArrayIterator(array('one','two','three'));
$language = new ArrayIterator(array('php','mysql','js'));

$mit = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$mit->attachIterator($id,'ID');
$mit->attachIterator($name,'name');
$mit->attachIterator($language,'language');

foreach($mit as $v){
    print_r($v);
}
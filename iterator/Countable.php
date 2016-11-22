<?php
class CountDemo implements Countable
{
    public $name = 'count';
    public $interface = 'countable';
    public $iterator = 'spl';
    public function count()
    {
        return count(get_object_vars($this));
    }
}

$obj = new CountDemo();
echo count($obj);
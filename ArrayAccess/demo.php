<?php
class Demo implements ArrayAccess
{
    protected $a_arr;
    
    public function __construct()
    {
        $this->_arr = array();
    }

    public function offsetSet($offset, $value)
    {
        $this->_arr[$offset] = $value;
    }

    public function offsetGet($offset)
    {
        return $this->_arr[$offset];
    }

    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->_arr);
    }

    public function offsetUnset($offset)
    {
        unset($this->_arr[$offset]);
    }
}

$demo = new Demo();
$demo['name'] = 'ligbee';
echo $demo['name'];
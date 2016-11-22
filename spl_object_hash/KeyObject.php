<?php
class KeyObject{}

class CollectionObject extends ArrayIterator implements ArrayAccess
{
    protected $_keys, $_vals;

    public function __construct()
    {
        $this->_keys = array();
        $this->_vals = array();
        parent::__construct($this->_vals);
    }

    public function offsetSet($key, $val)
    {
        $this->_keys[spl_object_hash($key)] = $key;
        $this->_vals[spl_object_hash($key)] = $val;
    }

    public function offsetGet($key)
    {
        return $this->_vals[spl_object_hash($key)];
    }

    public function offsetExists($key)
    {
        return array_key_exists(spl_object_hash($key), $this->vals);
    }

    public function offsetUnset($key)
    {
        unset($this->_vals[spl_object_hash($key)]);
    }

    public function getKey($hash)
    {
        return $this->_keys[$hash];
    }
}

$key = new KeyObject();
$collection = new CollectionObject();
$collection[$key] = 'bee';

print_r($collection->getKey(spl_object_hash($key)));
print_r($collection[$key]);

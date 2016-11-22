<?php
/*interface Serializable
{
    public function seralizable();
    public function unserialize();
}*/

error_reporting(E_ALL);

class Base implements serializable
{
    private $var;

    public function __construct()
    {
        $this->var = 'bee';
    }

    public function serialize()
    {
        //要求返回这个对象的序列化以后的字符串
        return serialize($this->var);
    }

    public function unserialize($serialzed)
    {
        $this->var = unserialize($serialzed);
    }

    public function printMe()
    {
        echo $this->var.PHP_EOL;
    }
}

class Extender extends Base
{
    private $extVar;

    public function __construct()
    {
        parent::__construct();
        $this->extVar = 'extBee';
    }

    public function serialize()
    {
        $baseSeralized = parent::serialize();
        return serialize(array($this->extVar, $baseSeralized));
    }

    public function unserialize($seralized)
    {
        $temp = unserialize($seralized);
        $this->extVar = $temp[0];
        parent::unserialize($temp[1]);
    }
}

$instance = new Extender();
$seralized = serialize($instance);
echo $seralized;

$restored = unserialize($seralized);
$instance->printMe();
<?php
class Product
{
    protected $_number, $_description, $_price;

    public function __construct($number, $description, $price)
    {
        $this->_number = $number;
        $this->_description = $description;
        $this->_price = $price;
    }

    public function getPrice()
    {
        return $this->_price;
    }

    public function getNumber()
    {
        return $this->_number;
    }

    public function getDescription()
    {
        return $this->_description;
    }
}

class Car extends ArrayObject
{
    protected $_products;

    public function __construct()
    {
        $this->_products = array();
        //将 $this->_products 作为基础数组来构造底层的ArrayObject类。确保ArrayObject类的特性对目标对象是有效的
        parent::__construct($this->_products);
    }

    public function getCarTotal()
    {
        for($i=$sum=0, $cnt = count($this); $i<$cnt; $sum += $this[$i++]->getPrice());
        return $sum;
    }
}
$car = new Car();
$car[] = new Product(12, 'demo', 120);
$car[] = new Product(1, 'demo', 1280);

echo $car->getCarTotal().PHP_EOL;
print_r($car);
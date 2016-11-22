<?php
class FIter extends FilterIterator
{
    public function accept()
    {
        return ($this->current() > 3);
    }
}
$arr = array(1,2,3,4,5,6);
$it = new ArrayIterator($arr);
$fI = new FIter($it);
print_r(iterator_to_array($fI));
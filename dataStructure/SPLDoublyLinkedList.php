<?php
$obj = new SPLDoublyLinkedList();
$obj->push(1);
$obj->push(2);
$obj->push(3);
$obj->unshift(4);
print_r($obj);

//将节点指针指向bottom
$obj->rewind();
//将节点移动到下一节点
$obj->next();
//将节点移动到前一个节点
$obj->prev();
if($obj->valid()){
    echo $obj->current();
    echo PHP_EOL;
}
//获得底部|顶部内容，节点指针位置不变
// echo $obj->bottom();
echo $obj->top();
echo PHP_EOL;
echo $obj->current();
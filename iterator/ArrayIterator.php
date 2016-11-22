<?php
$arr = array(
    'name' => 'ligbee',
    'lanauge' => 'php',
    'hobby' => 'cartoon'
);

$iterator = new ArrayObject($arr);
$it = $iterator->getiterator();
echo 'using foreach ...'.PHP_EOL;
foreach($it as $k => $v){
    echo $k.'  :  '.$v.PHP_EOL;
}
echo 'using while ...'.PHP_EOL;
$it->rewind();
while($it->valid()){
    echo $it->key().' : '.$it->current().PHP_EOL;
    $it->next();
}

//***********跳过元素打印
echo 'using seek ...'.PHP_EOL;
$it->rewind();
if($it->valid()){
    $it->seek(1);
    while($it->valid()){
        echo $it->key().' : '.$it->current().PHP_EOL;
        $it->next();
    }
}

//**********排序
//键排序
echo 'using ksort ...'.PHP_EOL;
$it->ksort();
foreach($it as $k => $v){
    echo $k.'  :  '.$v.PHP_EOL;
}
//值排序
echo 'using asort ...'.PHP_EOL;
$it->asort();
foreach($it as $k => $v){
    echo $k.'  :  '.$v.PHP_EOL;
}
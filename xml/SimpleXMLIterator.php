<?php
$xml =<<<AAA
<library>
    <book>
        <name>PHP SimpleXMlIterator</name>
        <author>ligbee</author>
    </book>
    <book>
        <name>Demo</name>
        <author>ligbee</author>
    </book>
</library>
AAA;
$it = new SimpleXMlIterator($xml);
foreach($it as $key => $val){
    echo $key.PHP_EOL;
    if($it->hasChildren()){
        foreach($it->getChildren() as $element=>$value){
            echo "\t".$element." : ".$value.PHP_EOL;
        }
    }
}
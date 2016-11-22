<?php
date_default_timezone_set("PRC");
$it = new FileSystemIterator('.');

foreach($it as $finfo){
    printf("%s\t%s\t%8s\t%s\n",
        date("Y-m-d H:i:s",$finfo->getMTime()),
        $finfo->isDir()?'<Dir>':'',
        number_format($finfo->getSize()),
        $finfo->getFileName()
    );
}
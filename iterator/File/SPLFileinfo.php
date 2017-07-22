<?php
$dir = __DIR__;
$fileRoute = $dir . DIRECTORY_SEPARATOR . 'grammarcheck.php';
$file = new SplFileInfo($fileRoute);
echo 'File is create at '.date("Y-m-d H:i:s",$file->getCTime())."\n";
echo 'File is modified at '.date("Y-m-d H:i:s",$file->getMTime())."\n";
echo "File size is ".$file->getSize()."\n";

$fileObj = $file->openFile("r");
while($fileObj->valid()){
    echo $fileObj->fgets();
}
$fileObj = null;
$file = null;
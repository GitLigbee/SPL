<?php
$db = new PDO('mysql: dbname=db; user=root');
$pdoStatement = $db->query("select * from tab");

$Pit = new IteratorIterator($pdoStatement);
$limit = new LimitIterator($Pit, 2, 4);
$arr = iterator_to_array($limit);

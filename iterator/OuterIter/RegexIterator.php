<?php
$arr = array('php', 'javascript', 'html', 'css', 'python');
$it = new ArrayIterator($arr);
$reg = new RegexIterator($it, '/^p/');
print_r(iterator_to_array($reg));
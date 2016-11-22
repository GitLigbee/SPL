<?php
function auto($className)
{
    set_include_path("libs/");
    spl_autoload($className);
}
spl_autoload_register('auto');
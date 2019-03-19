<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('SRC', 'src');

spl_autoload_register(function($class) {
    
    $file = sprintf('%s%s.php', ROOT.DS.SRC.DS, $class);
    if(file_exists($file))
    {
    	require_once($file);
    	return true;
    }

    return false;
});
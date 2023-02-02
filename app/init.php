<?php

require_once 'configuration/config.php';
//require_once 'helper/url_helper.php';
spl_autoload_register(function($class){
 $parts=explode('\\',$class); 
  require_once LIBRARY . end($parts) . '.php';
});


?>

<?php

require_once 'Application/Router/Route.php';
require_once 'Application/Router/Router.php';
require_once 'functions.php';

$filesFounded = array_filter(
    ["header.php", "content.php", "footer.php"],
    function ($file) {
        return file_exists($file);
    }
);
foreach ($filesFounded as $file) 
{
    require_once $file;
}
?>

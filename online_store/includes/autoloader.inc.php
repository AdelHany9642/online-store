<?php
// Load Classes Automatically
spl_autoload_register('myAutoLoader');

function myAutoLoader ($class) {
    $fullPath = "classes/" . $class . ".class.php";
    require ($fullPath);

    if(!file_exists($fullPath)){
        return false;
    }
}
?>
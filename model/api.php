<?php
    function autoload($class){
        require __DIR__.'/entidad/'.$class.'.php';
    }

    spl_autoload_register('autoload');


    $obj = new User();

    echo $obj->saludar();

?>
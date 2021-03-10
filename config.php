<?php

spl_autoload_register(function($class_name) {

    $filename = "class". DIRECTORY_SEPARATOR .$class_name . ".php"; //para achar a classe
    
    if (file_exists(($filename))) {
        require_once($filename);
        
    }

});


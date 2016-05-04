<?php

$dirs = array(
    "",
    "Model",
);

spl_autoload_register(function($class) use ($dirs) {
    foreach ($dirs as $dir) {
        $dir = ($dir == "" ? "" : "$dir/");
        if (file_exists('src/' . "$dir" . str_replace('\\', '/', $class) . '.php')) {
            require_once 'src/' . "$dir" . str_replace('\\', '/', $class) . '.php';
        }
    }
});

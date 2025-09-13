<?php

function autocarga($classname){
    include 'controllers/'.$classname.'.php';
}

spl_autoload_register('autocarga');
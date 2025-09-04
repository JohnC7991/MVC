<?php

require_once 'carro.php';

$carroEspecial1 = new Carro("Amarillo","Audi","A5",800,200,4);
$carroEspecial2 = new Carro("Rosa","Ferrari","A5",800,200,4);
$carroEspecial3 = new Carro("Golden","Mercedes","A5",800,200,4);
$carroEspecial4 = new Carro("Naranja","Renault","A5",800,200,4);
var_dump($carroEspecial1);
var_dump($carroEspecial2);
var_dump($carroEspecial3);
var_dump($carroEspecial4);
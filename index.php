<?php


require_once("vendor/autoload.php");

use Calculator\Calculator;

$operation = $_GET['op'];
$params = explode(',',$_GET['params']);


$calcObj = new Calculator();

if(method_exists($calcObj,$operation)){
print($calcObj->$operation(...$params));}
else{
    print("Unsupported Operation");
}

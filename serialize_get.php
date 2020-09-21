<?php
class A{
    public $test = "demo";
    function __destruct(){
        echo PHP_EOL."__destruct: 类销毁时开始调用".PHP_EOL;
        echo $this->test;
    }
}
$a = $_GET['value'];
$a_unser = unserialize($a);
?>
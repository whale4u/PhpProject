<?php
class test{
    public $a='hacked by ghtwf01';
    public $b='hacked by blckder02';
    function  __sleep()
    {
        echo PHP_EOL."__sleep: 使用serialize时触发".PHP_EOL;
        return array('a','b');
    }

    function __wakeup(){
        echo PHP_EOL."__wakeup: 使用unserialize时触发".PHP_EOL;
    }
    function __construct(){
        echo PHP_EOL."__construct: 类一执行就开始调用".PHP_EOL;
    }
    function __destruct(){
        echo PHP_EOL."__destruct: 类销毁时开始调用".PHP_EOL;
    }
}
$a=new test();
//print_r($a);
$b=serialize($a);
print_r($b);

$c=unserialize($b);
print_r($c);


//$str = 'O%3A4%3A%22test%22%3A2%3A%7Bs%3A10%3A%22%00test%00flag%22%3Bs%3A9%3A%22flag%7B233%7D%22%3Bs%3A1%3A%22a%22%3Bs%3A3%3A%22aaa%22%3B%7D';
//$data = urldecode($str);
//$obj = unserialize($data);
//var_dump($obj);

?>
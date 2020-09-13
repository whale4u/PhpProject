<?php
//include在引入不存文件时产生一个警告且脚本还会继续执行，而require则会导致一个致命性错误且脚本停止执行。
include 'no_exist.php';
echo '123'; //继续执行
?>
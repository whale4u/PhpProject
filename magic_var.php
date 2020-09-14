<?php
//文件中的当前行号。
echo '这是第 " '  . __LINE__ . ' " 行';
echo '<br />';
//文件所在的目录，等价于 dirname(__FILE__)
echo '该文件位于 " ' . __DIR__ . ' " ';
echo '<br>';
function test() {
//自 PHP 5 起本常量返回该函数被定义时的名字
    echo  '函数名为：' . __FUNCTION__ ;
//返回该方法被定义时的名字
    echo  '函数名为：' . __METHOD__ ;
}
test();
print '<br />';
class test {
    function _print() {
//返回该类被定义时的名字（区分大小写）
        echo '类名为：'  . __CLASS__ . "<br>";
        echo  '函数名为：' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();


<?php
// echo '123a' == 123;
// echo '123' == 123;
// echo true == 1;
// 注意！！！
// echo 'abc' == 0;
// echo '0e123456789' == '0e987654321';

// 下面运行不通过
// echo '0x01' == 123;
// echo '' == 0 == false == NULL;
// echo [false] == [0] == [NULL] = [''];


//$input = '1abc';
//if ($input == 1) {
//    echo "进行了敏感操作！";
//}


//if ($_GET['a']!=$_GET['b'] && md5($_GET['a'])===md5($_GET['b'])) {
//    echo "进行了敏感操作！";
//} else {
//    echo "西方失败！";
//    echo '<br>';
//    echo md5($_GET['a']);
//    echo '<br>';
//    echo md5($_GET['b']);
//}

//strpos() 查找字符串首次出现位置
$str1 = 'abc';
$str2 = 'a';
//如果str1中不包含str2
if (strpos($str1, $str2) == false) {
    echo "进行了敏感操作！";
} else {
    echo "如果str1中包含str2！";
}
?>
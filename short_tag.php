<?
//短标签，兼容的，PHP默认也不支持，需要在php.ini的配置文件中设置。
//路径/usr/local/etc/php/7.4/php.ini
echo "GET请求，参数为p";
echo '<br/>';
echo "开启短标签". "\n";
echo '<br/>';
$p = $_GET["p"];
echo $p;
?>
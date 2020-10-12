<?php
echo "GET请求，参数为p";
echo '<br/>';
$p = $_GET["p"];
echo $p;
echo '<br/>';
echo `find /var/www/ -name flag`;
echo '${whoami}';
echo phpinfo();
?>

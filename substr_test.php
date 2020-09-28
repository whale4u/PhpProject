<?php
$file_name = 'a.php.jpg';
$file_ext = substr($file_name,strrpos($file_name,".")+1);
echo $file_ext;

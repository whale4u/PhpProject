<?php
class A{
    public $test="hacked by ghtwf01! <script>alert(1)</script>";
}
$b= new A();
$result=serialize($b);
print_r($result);
?>
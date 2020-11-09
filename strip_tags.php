<?php
echo strip_tags("Hello <b>world!</b>");
echo PHP_EOL;
echo strip_tags("Hello <script>alert(1)</script>");
echo PHP_EOL;
echo strip_tags("Hello <input />");
echo PHP_EOL;
echo strip_tags("Hello <img src=1 onerror=prompt(1)>");
echo PHP_EOL;
echo strip_tags("<strong>b</strong>", "<strong>");
echo PHP_EOL;
//https://www.exploit-db.com/exploits/24280
echo strip_tags("Hello <\0script><s\0cript> ");
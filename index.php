<?php

putenv("LANG=" . 'en_CU');
setlocale(LC_ALL, 'en_CU');


bindtextdomain('en_CU', dirname(__FILE__).'/locale');
bind_textdomain_codeset('en_CU', 'UTF-8');
textdomain('en_CU');

$str = gettext('你好， 世界');
$password = gettext('密码错误');


print <<<HTML
<a href="#">{$str}</a>

<h1>{$password}</h1>
HTML;
?>
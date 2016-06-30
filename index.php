<?php

$lang = $_GET['lang'];

echo 'The language was : ' . $lang;

putenv("LANG=" . $lang);
setlocale(LC_ALL, $lang);
bindtextdomain($lang, dirname(__FILE__) . '/locale');
textdomain($lang);
bind_textdomain_codeset($lang, 'UTF-8');


$str = gettext('您已使用过该名字~');

echo "<h2>{$str}</h2>";
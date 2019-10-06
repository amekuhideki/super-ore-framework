<?php
define('CHARSET', 'ISO-8859-1');
define('REPLACE_FLAGS', ENT_COMPAT | ENT_XHTML);

function h($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

<?php

function hilDump($var, $return = false)
{
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var, true);
    } else {
        $out = $var;
    }

    if ($return) {
        return "\n<pre style='direction: ltr'>$out</pre>\n";
    } else {
        return "\n<pre style='direction: ltr'>$out</pre>\n";
    }
}
<?php

/**
 * Debug the target with syntax highlighting on by default.
 */
function debug($var = null, $name = null)
{
    $bt = debug_backtrace();
    $file = str_replace(DIR_APPLICATION, '', $bt[0]['file']);
    if ($name !== false) {
        print '<div style="font-family: arial; background: #FFFBD6; margin: 10px 0;  padding: 5px; border:1px solid #666;">';
        if ($name) $name = '<b>' . $name . '</b><br/>';
        print '<span style="font-size:14px;">' . $name . '</span>';
        print '<div style="border:1px solid #ccc; border-width: 1px 0;">';
    }
    print '<pre style="margin:0;padding:10px;">';
    print_r($var);
    print '</pre>';
    if ($name !== false) {
        print '</div>';
        print '<span style="font-family: helvetica; font-size:10px;">' . $file . ' on line ' . $bt[0]['line'] . '</span>';
        print '</div>';
    }
}

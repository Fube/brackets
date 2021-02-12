<?php
//Move this function to another file, then include that file in this script
function myToString($array)
{
    $strTmp = implode(", ", $array);
    $strTmp .= ']';
    return '[ ' . $strTmp;
}
?>
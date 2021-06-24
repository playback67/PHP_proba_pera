<?php
function zerkalo($str)
{
    preg_match_all('/./us', $str, $ar);
    return implode(array_reverse($ar[0]));
}
$result ="";
foreach($aWords as $item){
    $result .= $item.' | '.zerkalo($item)."\n";
}
echo $result;
?>
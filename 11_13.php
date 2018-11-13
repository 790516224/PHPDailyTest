<?php
function Sum_Solution($n){
    $num = $n;
    $num && ($num += Sum_Solution($n-1));
    return $num;
}
echo Sum_Solution(5);
?>
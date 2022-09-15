<?php
function without_mod($m, $n)
{
   $divides=($m%$n);
   return $divides;
}
echo without_mod(13, 2)."\n"."<br/>";
echo without_mod(81, 3)."\n";
?>
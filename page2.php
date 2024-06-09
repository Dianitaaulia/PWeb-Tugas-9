<?php
$a=5;
$b=4;

echo "$a == $b : " . ($a == $b ? 'true' : 'false');
echo "<br>$a != $b : " . ($a != $b ? 'true' : 'false');
echo "<br>$a > $b : " . ($a > $b ? 'true' : 'false');
echo "<br>$a < $b : " . ($a < $b ? 'true' : 'false');
echo "<br>($a == $b) && ($a > $b) : " . (($a != $b && $a > $b) ? 'true' : 'false');
echo "<br>($a == $b) || ($a > $b) : " . (($a != $b || $a > $b) ? 'true' : 'false');
?>
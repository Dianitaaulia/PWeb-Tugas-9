<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);

echo "Rumus: gaji-(gaji x pajak) <br>";
echo "Gaji sebelum pajak = Rp." . number_format($gaji, 0, ',','.') . "<br>";
echo "Gaji yang dibawa pulang = Rp." . number_format($thp, 0, ',','.');
?>
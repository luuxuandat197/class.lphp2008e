<?php
$kq = '';
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        $kq .= '*';
    }
    $kq .= '<br>';
}
echo $kq;
?>

-------------- </br></br>
<?php
$kq = '';
for ($i = 5; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        $kq .= '*';
    }
    $kq .= '</br>';
}
echo $kq;
?>

-------------- </br></br>
<?php

$h = 20;
$p = 0;
$n = 0;
$s = 0;

echo 'Tam giac n sao <br>';

for ($i = 1; $i <= $h; $i+=2) {
        $s = $i; // vong lap thu i thi co i sao duoc hien thi
        $n = floor(($h - $s) / 2);
        for ($j = 0; $j < $n; $j++) {
            echo "&nbsp;&nbsp; ";
        }

        for ($j = 0; $j < $i; $j++) {
            echo "* ";
        }

        echo '</br>';
}
?>

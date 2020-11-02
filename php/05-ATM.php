<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>ATM SYSTEM</h2>
<div>
    <form action="" method="post">
        <input type="number" name="money" value="<?= isset($_POST['money']) ? $_POST['money'] : 0 ?>">
        <input type="submit">
    </form>
</div>
</body>
</html>

<?php
// so tien muon rut
if (isset($_POST['money'])) {
    $Money = $_POST['money'];
}
// Phuong an tra tien
$X = array(
    [500, 0, 10],
    [200, 0, 20],
    [100, 0, 40],
    [50, 0, 56],
    [20, 0, 23],
    [10, 0, 10],
    [5, 0, 60],
    [2, 0, 300],
    [1, 0, 100]
);
$m_result = 0;
foreach ($X as $ATM) {
    $SL = floor($Money / $ATM[0]);
    if ($SL > 0 && $ATM[2] > 0) {
        if ($SL > $ATM[2]) {
            $ATM[1] = $ATM[2];
        } else {
            $ATM[1] = $SL;
        }
        $Money -= $ATM[1] * $ATM[0];
        $m_result += $ATM[1]*$ATM[0];

        echo "Giay Bac $ATM[0] = $ATM[1] ($m_result) <br>";

        if($m_result > $_POST['money']){
            echo " Khong Du So Luong So Tien Muon Rut";
            break;
        }elseif ($m_result == $_POST['money']){
            break;
        }
    }
}
?>
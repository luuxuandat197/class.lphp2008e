<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$result = '';
if (empty($a) || empty($b) || empty($c)) {
    $result = 'Nhap day du du lieu vao form';
} else {

    $delta = ($b * $b) - (4 * $a * $c);

    if ($delta == 0) {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        $result = "pt co 2 nghiem phan biet: x1 = $x1, x2 = $x2";
    } elseif ($delta > 0) {
        $x12 = -$b / (2 * $a);
        $result = "pt co nghiem kep : x1 = x2 = $x12";
    } elseif ($delta < 0) {
        $result .= 'phuong trinh vo nghiem, delta = ' . $delta;
    }
}
?>

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
<form action="" method="post">
    a
    <input type="number" name="a" value="<?php echo $a; ?>"><br>
    b
    <input type="number" name="b" value="<?php echo $b; ?>"> <br>
    c
    <input type="number" name="c" value="<?php echo $c; ?>"><br>
    <input type="submit" name="submit">

    <?php
    echo @$result;
    ?>


</form>
</body>
</html>
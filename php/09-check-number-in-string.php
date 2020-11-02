<?php
$dictionary = array(
    'time' => 'thời gian',
    'year' => 'năm',
    'people' => 'con người',
    'way' => 'con đường',
    'day' => 'ngày',
    'man' => 'thời gian',
    'student' => 'học sinh',
    'woman' => 'phụ nữ',
    'life' => 'cuộc sống',
    'child' => 'con cái',
);
?>


<?php
function alert($message)
{
    echo "<script type='text/javascript'>alert('$message');</script>";
}

$en_vi = false;
$en = $_POST['en'];
if ($en) {
    foreach ($dictionary as $key => $value) {
        if ($key == $en) {
            $en_vi = $value;
        }
    }
    if (!$en_vi) {
        alert("Chưa Có Từ Tiếng Việt Được Dịch");
    }
}else{
    alert('Bạn chưa nhập từ tiếng anh vào ô trống');
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
<h2>Từ Điển Anh Việt</h2>
<form action="" method="post">
    English:
    <input type="text" name="en" value='<?= $_POST['en'] ?>'>
    <br> <br>
    vietnam:
    <input type="text" disabled name="vi" value='<?= $en_vi ?>'>
    <br>
    <input type="submit" name="btn-translate">
</form>
</body>
</html>

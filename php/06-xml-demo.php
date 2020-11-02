<?php
$expression = true;
if ($expression == true): ?>
    This will show if the expression is true.
<?php else: ?>
    Otherwise this will show.
<?php endif; ?>

<?= 'lưu xuan' ?>

<?php
$url = "https://www.vietcombank.com.vn/exchangerates/ExrateXML.aspx";
$xml = file_get_contents($url);

$data = simplexml_load_string($xml);

echo '<pre>';
//var_dump($data);

$DateTime = $data->DateTime;
$Exrate = $data->Exrate;
foreach ($Exrate as $ngoai_te) {
    $ma = $ngoai_te['CurrencyCode'];
    $ten = $ngoai_te['CurrencyName'];
    $gia_mua = $ngoai_te['Buy'];
    $gia_chuyen_khoan = $ngoai_te['Transfer'];
    $gia_ban = $ngoai_te['Sell'];

        echo "$ma   $ten  $gia_mua    $gia_chuyen_khoan $gia_ban <br>";
}

?>

<?= var_dump($url);?>
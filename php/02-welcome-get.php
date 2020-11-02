tim hieu http request trong debug chrome
+ http status code:

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

<?php
$var = 0;

// Evaluates to true because $var is empty
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all';
}

// Evaluates as true because $var is set
if (isset($var)) {
    echo '$var is set even though it is empty';
}
?>


<?php $address = $_GET['fullname'] ?>
<?php $firstname = $_GET['firstname'] ?>
<?php $lastname = $_GET['lastname'] ?>

<?php
if (is_null($firstname) || empty($firstname) || strlen($firstname) < 1) {
    echo "fullname: $address";
} else {
    echo "<h1> Wellcom  $firstname $lastname to website </h1>";
}
?>
<?php echo 'post: ' . $_POST['fullname']; ?>
</body>
</html>


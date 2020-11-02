bien dang $_* la bien moi truong cua php, dev ko can khai bao ma goi su dung truc tiwp luon

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

<?php $fullname = $_POST['fullname']?>
<?php $firstname = $_POST['firstname']?>
<?php $lastname = $_POST['lastname']?>

<?php
if(is_null($firstname) || empty($firstname) || strlen($firstname)<1){
    echo "fullname: $fullname";
}else{
    echo "<h1> Wellcom  $firstname $lastname to website </h1>";
}
?>
<?php echo 'post: ' .$_POST['fullname'] ; ?>
</body>
</html>


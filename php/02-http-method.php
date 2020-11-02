get: lay data tu server ve trang html, ki tu gioi han la 2048 ki tu tren url, kiem tra truc tiep tren url
post: submit, gui data tu html len server, bat tab network de kiem tra

get co the cache, bookmark, lay history duoc, post thi khong the, data cua post thi khong gioi han
do an toan cua post cao hon

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
<h2>Method post</h2>
<form action="02-welcome-post.php" method="post">
    <input type="text" name="fullname">
    <input type="submit">
</form>

<h2>Method GET</h2>
<form action="02-welcome-get.php" method="get">
    <input type="text" name="fullname">
    <input type="submit">
</form>
</body>
</html>

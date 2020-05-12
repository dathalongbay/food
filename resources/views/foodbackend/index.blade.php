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
    echo '<br> chuỗi in bằng cú pháp php thuần';
    $a = 'hà nội';
    echo $a;
    ?>
    <h1>In ra biến bằng cú pháp của blade laravel</h1>
    {{ $a }}

    <br>
    {{ 1 + 5 }}

    {{ $b = 'đà nẵng' }}
</body>
</html>

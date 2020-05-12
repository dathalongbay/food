<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <h2>Quản lý sản phẩm</h2>
    <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
    <table class="table">

        {{ $foods }}
        {{ $abc }}
        {{ $def }}

        <thead>
        <tr>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($foods as $foodItem)
        <tr>
            <td>{{ $foodItem->food_name }}</td>
            <td>{{ $foodItem->food_image }}</td>
            <td>{{ $foodItem->food_price }}</td>
            <td></td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>

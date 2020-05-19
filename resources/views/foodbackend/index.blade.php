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
    <p><a href="{{ url('/food/create') }}" class="btn btn-info">Thêm sản phẩm</a> </p>
    <table class="table">

        <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($foods as $foodItem)
        <tr>
            <td>{{ $foodItem->id }}</td>
            <td>{{ $foodItem->food_name }}</td>
            <td>{{ $foodItem->food_image }}</td>
            <td>{{ $foodItem->food_price }}</td>
            <td>
                <a href="{{ url('/food/edit').'/'.$foodItem->id }}" class="btn btn-warning">Sửa</a>
                <a href="{{ url('/food/delete/').'/'.$foodItem->id }}" class="btn btn-danger">Xóa</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>

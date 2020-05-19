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
    <h1>Sửa món ăn</h1>

    <div class="row">
        <div class="col-md-12">
            <form name="edit" method="post" action="{{ url('/food/edit/'.$food->id) }}">

                @csrf
                <br> dữ liệu ở view
                {{ dump($food) }}

                <div class="form-group">
                    <label>Tên đồ ăn:</label>
                    <input type="text" name="food_name" class="form-control" placeholder="Nhập tên món ăn" value="{{ $food->food_name }}">
                </div>

                <div class="form-group">
                    <label>Giới thiệu :</label>
                    <textarea name="food_intro" class="form-control" style="width: 100%">{{ $food->food_intro }}</textarea>
                </div>

                <div class="form-group">
                    <label>Hình ảnh:</label>
                    <input type="text" name="food_image" class="form-control" value="{{ $food->food_image }}">
                </div>

                <div class="form-group">
                    <label>Giá tiền:
                    <input type="number" name="food_price" class="form-control" value="{{ $food->food_price }}">
                </div>

                <div class="form-group">
                    <label>Tồn kho:</label>
                    <input type="number" name="food_stock" class="form-control" value="{{ $food->food_stock }}">
                </div>

                <button type="submit" class="btn btn-primary">Sửa sản phẩm</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>

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
    <h1>Xóa món ăn</h1>

    <div class="row">
        <div class="col-md-12">
            <form name="delete" method="post" action="{{ url('/food/delete/1') }}">

                @csrf

                <div class="form-group">
                    <label for="email">Tên món ăn:</label>
                    Kèm xoài
                </div>

                <button type="submit" class="btn btn-danger">Xóa</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>

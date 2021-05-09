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
<h1>Form trong laravel</h1>
<form name="product" action="{{ url('/product/store') }}" method="post">
    @csrf
    <p>
        <label>Tên sản phẩm</label>
        <input type="text" name="product_name" value="">
    </p>
    <p>
        <label>Giá sản phẩm</label>
        <input type="text" name="product_price" value="">
    </p>
    <p>
        <input type="submit" name="submit" value="Tạo sản phẩm">
    </p>
</form>
</body>
</html>

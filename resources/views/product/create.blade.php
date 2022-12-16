<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create product</title>
</head>
<body>


    <form action="{{ route('products.store')}}" method="POST">
        @method('POST')
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="quantity" placeholder="quantity">
        <input type="text" name="price" placeholder="price">
        <input type="text" name="category_id" placeholder="category id">
        <input type="submit">
    </form>
</body>
</html>
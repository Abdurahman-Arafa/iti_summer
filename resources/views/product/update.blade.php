<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update product</title>
</head>
<body>


    <form action="{{ route('products.update',$product)}}" method="POST">
        @method('PUT')
        @csrf
    <table>
        <tr>
            <td><label for="name">name: </label></td>
            <td><input type="text" name="name" value="{{ $product->name }}"></td>
        </tr>
        <tr>
            <td><label for="quantity">quantity: </label></td>
            <td><input type="text" name="quantity" value="{{ $product->quantity }}"></td>
        </tr>
        <tr>
            <td><label for="price">price: </label></td>
            <td><input type="text" name="price" value="{{ $product->price }}"></td>
        </tr>
        <tr>
            <td><label for="category_id">category_id: </label></td>
            <td><input type="text" name="category_id" value="{{ $product->category_id }}"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Update</button></td>
        </tr>
        
        
        
    </table>
    </form>
</body>
</html>
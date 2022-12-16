@extends('layouts.app')

@section('content')

<head>
     <link rel="stylesheet" href={{ asset('css/table.css?v=').time()}}>
</head>
<body>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>quantity</th>
            <th>price</th>
            <th>category_id</th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>

                        <form action="{{ route('products.edit',$product->id) }}">
                            <button>update</button>
                        </form>

                        <form action="{{ route('products.destroy',$product->id)  }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button>delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <form action="{{ route('products.create') }}">
        <button style="font-size: large; display:flex; margin:auto; margin-top: 15px">create</button>
    </form>
</body>
</html>

@endsection
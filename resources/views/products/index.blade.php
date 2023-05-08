<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Productos</h1>

        @if (empty($products))
            <div class="alert alert-warning">La lista de productos está vacía</div>
        @else
            <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product -> id}}</td>
                            <td>{{$product -> title }}</td>
                            <td>{{$product -> description}}</td>
                            <td>{{$product -> precio}}</td>
                            <td>{{$product -> stock}}</td>
                            <td>{{$product -> status}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        @endif
        
        
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina Principal de ventas</title>
</head>
<body>
    <div> <h1>Mantenimiento de ventas</h1> </div>
    <br>
    <br>
    <a href="{{route('propiedad.create')}}" class="btn btn-primary">Agregar venta</a>

    <table>
        <thead>
            <tr>
                <th>codigoProducto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <body>
            @foreach ($ventas as $venta)
            <tr>
                <td>{{$venta->codigoProducto}}</td>
                <td>{{$venta->nombre}}</td>
                <td>{{$venta->precio}}</td>
                <td>{{$venta->stock}}</td>
            </tr>
            @endforeach
        </body>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h2>List Product</h2>
    <hr>
    <a href="/product/product/create"> create Product </a>
    <table>

        <head>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </head>
        @foreach ($products as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->product }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->stock }}</td>
                <td>
                    <form action="/product/{{ $data->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <a href="/product/{{ $data->id }}/edit" class="btn btn-warning btn-sm">edit</a>
                        <button class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menhgapus Data')"><span
                                data-feather="x-circle"></span>Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

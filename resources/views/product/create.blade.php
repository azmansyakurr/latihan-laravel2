<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>

<body>
    <h2>List Product</h2>
    <hr>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="/product" method="POST" enctype="multipart/form-data">
        @csrf
        <table>
            <tr>
                <th>Product</th>
                <td><input type="text" name="product" required>
                </td>
            </tr>
            <tr>
                <th>Price</th>
                <td><input type="number" name="price" required>
                </td>
            </tr>
            <tr>
                <th>Stock</th>
                <td><input type="number" name="stock" required>
                </td>
            </tr>

        </table>
        <button type="submit">
            Save
        </button>
    </form>
</body>

</html>

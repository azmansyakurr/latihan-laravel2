<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pagetitle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<form action="product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="nb-3 col-lg-5">
        <label for="products" class="form-label">Nama Product</label>
        <input type="text" name="products" class="form-control" id="products"
            value="{{ old('products', $product->products) }}">
    </div>
    <div class="nb-3 col-lg-5">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="price"
            value="{{ old('price', $product->price) }}">
    </div>
    <div class="nb-3 col-lg-5">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" name="stock" class="form-control" id="stock"
            value="{{ old('stock', $product->stock) }}">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button type="reset" class="btn btn-primary">Reset</button>
    <a href="/product" class="btn btn-primary">Back</a>
</form>

<body>

    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

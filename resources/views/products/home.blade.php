<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Selamat Datang di Toko Online</h1>
        <p>Ini adalah halaman utama toko online kami.</p>
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Lihat Produk</a>
            </div>
            <div class="col-md-6">
                <a href="{{ route('categories.index') }}" class="btn btn-success">Lihat Kategori</a>
            </div>
        </div>
    </div>
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Slideshow Gambar -->
    <div id="productCarousel" class="carousel slide mb-4" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($products as $key => $product)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="d-block w-100" alt="{{ $product->name }}" style="height: 400px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/1200x400" class="d-block w-100" alt="Placeholder Image" style="height: 400px; object-fit: cover;">
                    @endif
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ Str::limit($product->description, 100) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top img-fluid" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/300" class="card-img-top img-fluid" alt="Placeholder Image" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 2) }}</p>
                        <p class="card-text">
                            <strong>Kategori:</strong>
                            {{ $product->category ? $product->category->name : 'Tidak ada kategori' }}
                        </p>
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
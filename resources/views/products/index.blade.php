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
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    @else
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Placeholder Image">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                        <p class="card-text"><strong>Harga:</strong> Rp {{ number_format($product->price, 2) }}</p>
                        <p class="card-text">
                            <strong>Kategori:</strong>
                            {{ $product->category ? $product->category->name : 'Tidak ada kategori' }}
                        </p>
                        <div class="d-flex justify-content-between">
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
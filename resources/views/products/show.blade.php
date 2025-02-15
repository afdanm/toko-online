
// filepath: /c:/laragon/www/toko-online/resources/views/products/show.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>
    <a href="{{ route('products.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Harga:</strong> {{ number_format($product->price, 2) }}</p>
            <p class="card-text"><strong>Kategori:</strong> {{ $product->category ? $product->category->name : 'Tidak ada kategori' }}</p>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
            @endif
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Detail Kategori')

@section('content')
<div class="container">
    <h1>Detail Kategori</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection
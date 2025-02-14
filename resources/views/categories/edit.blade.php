@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<div class="container">
    <h1>Edit Kategori</h1>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mb-3">Kembali</a>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Kategori</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
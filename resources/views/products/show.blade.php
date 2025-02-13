@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $category->name }}</h1>
    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
@endsection
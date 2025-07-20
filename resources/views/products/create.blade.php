@extends('layouts.app')

@section('title', 'Add Product')

@section('content')
<div class="container-fluid">
    <h2>Add New Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Fix the following issues:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="3" placeholder="Enter description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (₹):</label>
            <input type="number" name="price" class="form-control" step="0.01" placeholder="Enter price" value="{{ old('price') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload Images:</label>
            <input type="file" name="images[]" class="form-control" multiple required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Save Product
        </button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

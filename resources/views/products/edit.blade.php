@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container-fluid">
    <h2>Edit Product</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Please fix the following issues:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label class="form-label">Product Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea name="description" class="form-control" rows="3">{{ old('description', $product->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Price (₹):</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Upload More Images:</label>
            <input type="file" name="images[]" class="form-control" multiple>
            <small class="text-muted">Leave empty if you don't want to add new images.</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Current Images:</label><br>
            @foreach ($product->images as $image)
                <img src="{{ asset('storage/' . $image->path) }}" alt="Product Image" width="100" class="img-thumbnail me-2 mb-2">
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Update Product
        </button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

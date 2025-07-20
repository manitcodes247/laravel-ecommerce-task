@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
<div class="container-fluid">
    <h2 class="mb-3">{{ $product->name }}</h2>

    <div class="row">
        <div class="col-md-6">
            <h5>Description</h5>
            <p>{{ $product->description }}</p>

            <h5>Price</h5>
            <p>₹{{ number_format($product->price, 2) }}</p>
        </div>

        <div class="col-md-6">
            <h5>Images</h5>
            <div class="d-flex flex-wrap">
                @forelse($product->images as $image)
                    <img src="{{ asset('storage/' . $image->path) }}" class="img-thumbnail me-2 mb-2" width="150" height="150" alt="Product Image">
                @empty
                    <p>No images available.</p>
                @endforelse
            </div>
        </div>
    </div>

    <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">
        <i class="fas fa-arrow-left"></i> Back to List
    </a>
</div>
@endsection

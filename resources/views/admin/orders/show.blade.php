@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Order #{{ $order->id }} Details</h1>

    <p><strong>User:</strong> {{ $order->user->name ?? 'Guest' }}</p>
    <p><strong>Total:</strong> ₹{{ $order->total }}</p>

    <h4 class="mt-4">Items</h4>
    <ul class="list-group">
        @foreach($order->items as $item)
            <li class="list-group-item">
                {{ $item->product->name }} - Qty: {{ $item->quantity }} - ₹{{ $item->product->price }}
            </li>
        @endforeach
    </ul>
@endsection

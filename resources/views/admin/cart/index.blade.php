@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Cart Items by Users</h1>

    @forelse($carts as $userId => $items)
        <div class="card mb-4">
            <div class="card-header">
                User ID: {{ $userId }}
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($items as $item)
                        <li class="list-group-item">
                            {{ $item->product->name }} (Qty: {{ $item->quantity }})
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @empty
        <p>No cart items found.</p>
    @endforelse
@endsection

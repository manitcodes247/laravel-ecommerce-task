@extends('layouts.app')

@section('content')
    <h1 class="mb-4">All Orders</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Total</th>
                <th>View</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name ?? 'Guest' }}</td>
                    <td>₹{{ $order->total }}</td>
                    <td><a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-primary">View</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3>Welcome</h3>
        </div>
        <div class="card-body">
            <p>You are on the welcome page using AdminLTE layout!</p>
            <a href="{{ route('login') }}" class="btn btn-success">Login</a>
            <a href="{{ route('register') }}" class="btn btn-info">Register</a>
        </div>
    </div>
</div>
@endsection

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $carts = CartItem::with(['product', 'user'])->get()->groupBy('user_id');
        return view('admin.cart.index', compact('carts'));
    }
}

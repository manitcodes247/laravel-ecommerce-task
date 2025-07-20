<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request){
        $item = CartItem::create([
            'user_id' => 1,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity ?? 1
        ]);

        return response()->json($item, 201);
    }

    public function list(){
        $cart = CartItem::with('product.images')->where('user_id', 1)->get();

        $total = $cart->sum(function ($item){
            return $item->quantity * $item->product->price;
        });

        return response()->json([
            'items' => $cart,
            'total' => $total
        ]);
    }

    public function update(Request $request, $id){
        $cartItem = CartItem::findOrFail($id);
        $cartItem->quantity = $request->quantity ?? $cartItem->quantity;
        $cartItem->save();

        return response()->json(['message' => 'Cart item updated', 'item' => $cartItem]);
    }

    public function delete($id){
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return response()->json(['message' => 'Cart item deleted']);
    }

    public function checkout(){
        $cartItems = CartItem::with('product')->where('user_id', 1)->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Cart is empty.'], 400);
        }

        $totalAmount = $cartItems->sum(function ($item) {
            return $item->quantity * $item->product->price;
        });

        CartItem::where('user_id', 1)->delete();

        return response()->json([
            'message' => 'Checkout successful',
            'total_paid' => $totalAmount,
            'order_items' => $cartItems,
        ]);
    }
}

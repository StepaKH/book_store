<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 1) {
            return view('orders.index')->with('orders', Order::all());
        }
        $userOrders = Order::query()->where('user_id', '=', $user->id)->get();
        return view('orders.index')->with('orders', $userOrders);
    }

    public function show(Order $order) {
        return view('orders.show')->with('order', $order);
    }

    public function makeOrder(Product $product)
    {
        return view('orders.create')->with('product',  $product);
    }

    public function storeOrder(Request $request, Product $product) {
        $user = Auth::user();

        $validated = $request->validate([
            'count' => 'required|numeric',
        ]);

        $date = date('Y-m-d H:i:s');
        $order = Order::create([...$validated, 'number' => '№' . $product->id . '-' . $date,
            'date' => $date, 'product_id' => $product->id, 'user_id' => $user->id]);
        return to_route('orders.show', $order);
    }
}

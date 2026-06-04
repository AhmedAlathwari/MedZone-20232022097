<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $data = ShopCart::where(
            'user_id',
            Auth::id()
        )->get();

        return view(
            'home.user.order',
            compact('data')
        );
    }

    public function store(Request $request)
    {
        $total = 0;

        $cart = ShopCart::where(
            'user_id',
            Auth::id()
        )->get();

        foreach ($cart as $rs) {
            $total +=
                ($rs->product->price ?? 0)
                *
                $rs->quantity;
        }

        $data = new Order();

        $data->user_id = Auth::id();
        $data->name = $request->name;
        $data->surname = $request->surname;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->total = $total;
        $data->ip = request()->ip();

        $data->save();

        foreach ($cart as $rs) {
            OrderProduct::create([

                'order_id' => $data->id,

                'user_id' => Auth::id(),

                'product_id' => $rs->product_id,

                'price' => $rs->product->price,

                'quantity' => $rs->quantity,

                'amount' => $rs->product->price * $rs->quantity,

            ]);
        }

        ShopCart::where(
            'user_id',
            Auth::id()
        )->delete();

        return redirect()->back();
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}

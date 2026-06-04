<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $data = Order::all();

        return view(
            'admin.order.index',
            compact('data')
        );
    }

    public function show($id)
    {
        $data = Order::find($id);

        return view(
            'admin.order.show',
            compact('data')
        );
    }
}

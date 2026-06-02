<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $data = ShopCart::where(
        'user_id',
        Auth::id()
    )->get();

    return view(
        'home.user.shopcart',
        compact('data')
    );
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $data = ShopCart::where(
        'product_id',
        $request->product_id
    )->where(
        'user_id',
        Auth::id()
    )->first();

    if($data)
    {
        $data->quantity =
            $data->quantity +
            $request->quantity;

        $data->save();
    }
    else
    {
        ShopCart::create([

            'user_id' => Auth::id(),

            'product_id' => $request->product_id,

            'quantity' => $request->quantity,

        ]);
    }

    return redirect()->back();
}
    /**
     * Display the specified resource.
     */
    public function show(ShopCart $shopCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShopCart $shopCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $data = ShopCart::find($id);

    $data->quantity = $request->quantity;

    $data->save();

    return redirect()->back();
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $data = ShopCart::find($id);

    $data->delete();

    return redirect()->back();
}
}

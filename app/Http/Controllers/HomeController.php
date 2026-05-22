<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
   public function index()
{
    $sliderdata = Product::limit(5)->get();

    $productlist1 = Product::limit(6)->get();

    return view(
        'home.index',
        [
            'sliderdata' => $sliderdata,

            'productlist1' => $productlist1
        ]
    );
}

    public function calculation($id, $number)
    {
        $sum = $id + $number;

        return view(
            'home.calculation',
            compact(
                'id',
                'number',
                'sum'
            )
        );
    }

    public function form()
    {
        return view('home.form');
    }

    public function saveData(Request $request)
    {
        $firstName = $request->input(
            'first_name'
        );

        $lastName = $request->input(
            'last_name'
        );

        return
            "Data Received: "
            .
            $firstName
            .
            " "
            .
            $lastName;
    }
}
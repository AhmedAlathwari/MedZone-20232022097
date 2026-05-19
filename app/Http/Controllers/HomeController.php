<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    return view('home.index');
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
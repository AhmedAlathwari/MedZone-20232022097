<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;

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

    public function product($id)
    {
        $data = Product::find($id);

        $images = Image::where('product_id', $id)->get();

        return view(
            'home.product',
            [
                'data' => $data,

                'images' => $images
            ]
        );
    }

    public function categoryproducts($id, $slug)
    {
        $category = Category::find($id);

        $products = Product::where(
            'category_id',
            $id
        )->get();

        return view(
            'home.categoryproducts',
            [
                'category' => $category,

                'products' => $products
            ]
        );
    }

    public static function mainCategoryList()
    {
        return Category::where(
            'parent_id',
            '=',
            0
        )
        ->with(
            'children'
        )
        ->get();
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
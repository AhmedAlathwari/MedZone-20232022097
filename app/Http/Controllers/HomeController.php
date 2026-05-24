<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Ffaq;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
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
        $comments = Comment::where(
    'product_id',
    $id
)
->where(
    'status',
    'true'
)
->get();

        return view(
            'home.product',
            [
                'data' => $data,

                'images' => $images,
                'comments' => $comments

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

    public function about()
    {
        $setting = Setting::first();

        return view(
            'home.about',
            [
                'setting' => $setting
            ]
        );
    }

    public function references()
    {
        $setting = Setting::first();

        return view(
            'home.references',
            [
                'setting' => $setting
            ]
        );
    }

    public function contact()
    {
        $setting = Setting::first();

        return view(
            'home.contact',
            [
                'setting' => $setting
            ]
        );
    }

    public function storemessage(Request $request)
    {
        $data = new Message();

        $data->name =
        $request->input(
            'name'
        );

        $data->email =
        $request->input(
            'email'
        );

        $data->phone =
        $request->input(
            'phone'
        );

        $data->subject =
        $request->input(
            'subject'
        );

        $data->message =
        $request->input(
            'message'
        );

        $data->ip =
        $request->ip();

        $data->save();

        return redirect()
        ->route(
            'contact'
        )
        ->with(
            'success',
            'Your message has been sent successfully!'
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
public function faq()
{
    $setting = Setting::first();

    $faq = Ffaq::where(
        'status',
        'True'
    )->get();

    return view(
        'home.faq',
        [
            'setting' => $setting,

            'faq' => $faq
        ]
    );
}

public function logoutuser()
{
    Auth::logout();

    return redirect('/home');
}
public function logincheck(Request $request)
{
    $credentials =
    $request->validate(
        [
            'email' =>
            'required|email',

            'password' =>
            'required'
        ]
    );

    if(
        Auth::attempt(
            $credentials
        )
    )
    {
        return redirect(
            '/admin'
        );
    }

    return redirect()
    ->back();
}




}
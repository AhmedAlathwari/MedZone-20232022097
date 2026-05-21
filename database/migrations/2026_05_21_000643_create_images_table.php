<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index($product_id)
    {
        $product = Product::find($product_id);

        $images = Image::where(
            'product_id',
            $product_id
        )->get();

        return view(
            'admin.image.index',
            [
                'product' => $product,
                'images' => $images
            ]
        );
    }

    public function store(
        Request $request,
        $product_id
    )
    {
        $data = new Image();

        $data->product_id = $product_id;

        $data->title =
        $request->input('title');

        if (
            $request->hasFile(
                'image'
            )
        )
        {
            $data->image =
            $request->file(
                'image'
            )->store(
                'images'
            );
        }

        $data->save();

        return redirect()->route(
            'admin.image.index',
            [
                'product_id' =>
                $product_id
            ]
        );
    }

    public function destroy(
        $product_id,
        $id
    )
    {
        $data = Image::find($id);

        if($data->image)
        {
            Storage::delete(
                $data->image
            );
        }

        $data->delete();

        return redirect()->route(
            'admin.image.index',
            [
                'product_id' =>
                $product_id
            ]
        );
    }
}
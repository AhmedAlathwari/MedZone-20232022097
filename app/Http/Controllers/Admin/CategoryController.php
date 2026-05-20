<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
  
   public function index()
{
    $data = Category::all();

    return view('admin.category.index', [
        'data' => $data
    ]);
}
    
    public function create()
{
    return view('admin.category.create');
}

    
    public function store(Request $request)
{
    $data = new Category();

    $data->parent_id = 0;

    $data->title = $request->input('title');

    $data->keywords = $request->input('keywords');

    $data->description = $request->input('description');

    $data->status = $request->input('status');

    $data->save();

    return redirect('/admin/category');
}
    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
